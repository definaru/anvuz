<?php

namespace frontend\modules\auth\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\auth\models\LoginForm;
use frontend\modules\auth\models\SignupForm;
use frontend\modules\auth\models\PasswordResetRequestForm;
use frontend\modules\auth\models\ResendVerificationEmailForm;
use frontend\modules\auth\models\ResetPasswordForm;
use frontend\modules\auth\models\VerifyEmailForm;
use yii\web\BadRequestHttpException;
use yii\base\InvalidArgumentException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class AuthController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup', 'signin'],
                'rules' => [
                    [
                        'actions' => ['signup', 'signin'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post']
                ]
            ]
        ];
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }


    public function actionIntroduction()
    {
        return $this->render('introduction');
    }


    public function actionSignin()
    {
        if (!Yii::$app->user->isGuest) return $this->goHome();

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('signin', ['model' => $model]);
    }

    
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }
        return $this->render('signup', ['model' => $model]);
    }


    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        $success_message = 'Проверьте свою электронную почту для получения дальнейших инструкций.';
        $error_message = 'К сожалению, мы не можем сбросить пароль для указанного адреса электронной почты.';

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', $success_message);
                return $this->redirect('/auth/request-password-reset');
            }
            Yii::$app->session->setFlash('error', $error_message);
        }
        return $this->render('requestPasswordResetToken', ['model' => $model]);
    }


    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'Новый пароль сохранён');
            return $this->redirect('/auth/signin');
        }
        return $this->render('resetPassword', ['model' => $model]);
    }


    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($model->verifyEmail()) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }


    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }
        return $this->render('resendVerificationEmail', ['model' => $model]);
    }

}
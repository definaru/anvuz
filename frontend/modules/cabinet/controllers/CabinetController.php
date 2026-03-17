<?php

namespace frontend\modules\cabinet\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
// use common\models\User;
// use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//use common\models\ProfileForm;

/**
 * CabinetController для личного кабинета зарегистрированных пользователей
 */
class CabinetController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'], // Только для авторизованных
                    ],
                ],
                // 'denyCallback' => function ($rule, $action) {
                //     return Yii::$app->response->redirect(['site/login']);
                // },
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Главная страница личного кабинета
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'user' => Yii::$app->user->identity,
        ]);
    }

    /**
     * Профиль пользователя
     */
    public function actionProfile()
    {
        $user = Yii::$app->user->identity;
        $model = [];
        //new ProfileForm($user);
        
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     Yii::$app->session->setFlash('success', 'Профиль успешно обновлен!');
        //     return $this->refresh();
        // }
        
        return $this->render('profile', [
            'model' => $model,
            'user' => $user,
        ]);
    }

    /**
     * Изменение пароля
     */
    // public function actionChangePassword()
    // {
    //     $user = Yii::$app->user->identity;
    //     $model = new \common\models\ChangePasswordForm($user);
        
    //     if ($model->load(Yii::$app->request->post()) && $model->changePassword()) {
    //         Yii::$app->session->setFlash('success', 'Пароль успешно изменен!');
    //         return $this->redirect(['profile']);
    //     }
        
    //     return $this->render('change-password', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * История действий
     */
    public function actionHistory()
    {
        // Здесь можно добавить логику для истории действий пользователя
        return $this->render('history');
    }

    /**
     * Настройки
     */
    // public function actionSettings()
    // {
    //     $user = Yii::$app->user->identity;
        
    //     if (Yii::$app->request->isPost) {
    //         $user->load(Yii::$app->request->post());
    //         if ($user->save()) {
    //             Yii::$app->session->setFlash('success', 'Настройки сохранены!');
    //             return $this->refresh();
    //         }
    //     }
        
    //     return $this->render('settings', [
    //         'user' => $user,
    //     ]);
    // }

    /**
     * Выход из аккаунта
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}
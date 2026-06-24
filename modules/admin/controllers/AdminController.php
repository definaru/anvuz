<?php
namespace frontend\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use frontend\models\ProfilesSearch;
use frontend\modules\auth\models\User;


class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    ['allow' => false]
                ]
            ], 
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                    'reset-password' => ['post']
                ]
            ]
        ];
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionPanel()
    {
        return $this->render('panel');
    }

    public function actionLocation()
    {
        return $this->render('location');
    }

    public function actionUsers()
    {
        // $searchModel = new ProfilesSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = User::find();
        return $this->render('users', ['model' => $model]);
    }

    public function actionEvents()
    {
        return $this->render('events');
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionUniversities()
    {
        return $this->render('universities');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionSetting()
    {
        return $this->render('setting');
    }

    public function actionHelp()
    {
        return $this->render('help');
    }

    public function actionResetPassword()
    {
        $password = Yii::$app->request->post('password');
        $id = Yii::$app->user->identity->id;
        $model = User::findOne($id);
        $model->setPassword($password);
        $model->generateAuthKey();
        
        if ($model->validate() && $model->save()) {
            Yii::$app->session->setFlash('successPassword', 'Пароль успешно изменён'); 
            return $this->goBack(Yii::$app->request->referrer);
        }
    }
} 
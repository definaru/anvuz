<?php
namespace frontend\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use frontend\models\ProfileSearch;


class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['panel'],
                'rules' => [
                    [
                        'actions' => ['panel'],
                        'allow' => true,
                        'roles' => ['@', 'admin'],
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

    public function actionPanel()
    {
        return $this->render('panel');
    }

    public function actionUsers()
    {
        $searchModel = new ProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('users', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
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
} 
<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
//use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\ContactForm;
use frontend\data\index\Blocks;
use frontend\data\contact\Blocks as BlocksContact;
use frontend\data\about\Blocks as BlocksAbout;
use frontend\data\documents\Blocks as BlocksDocuments;
use frontend\data\management\Blocks as BlocksManagement;
use frontend\data\news\Blocks as BlocksNews;
use frontend\models\NewsSearch;
use frontend\models\News;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index', 'news', 'privacyPolicy', 'userAgreement', 'contact', 'about'],
                'rules' => [
                    [
                        'actions' => ['index', 'news', 'privacyPolicy', 'userAgreement', 'contact', 'about'],
                        'allow' => true,
                        'roles' => ['?'],
                    ]
                ]
            ]
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex()
    {
        $content = Blocks::list();
        return $this->render('index', compact('content'));
    }


    public function actionAbout()
    {
        $content = BlocksAbout::list();
        return $this->render('about', compact('content'));
    }


    public function actionDocuments()
    {
        $content = BlocksDocuments::list();
        return $this->render('documents', compact('content'));
    }


    public function actionManagement()
    {
        $content = BlocksManagement::list();
        return $this->render('management', compact('content'));
    }

    
    public function actionNews($href = '')
    {
        $content = BlocksNews::list();
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $new = $href !== '' ? News::find()->where(['href' => $href])->one() : '';
        return $this->render('news', compact('content', 'searchModel', 'dataProvider', 'new'));
    }


    public function actionPrivacyPolicy()
    {
        return $this->render('privacyPolicy');
    }


    public function actionUserAgreement()
    {
        return $this->render('userAgreement');
    }


    public function actionSiteMap()
    {
        return $this->render('sitemap');
    }


    public function actionActivities()
    {
        return $this->render('activities');
    }


    public function actionContact()
    {

        $content = BlocksContact::list();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }
            return $this->refresh();
        }
        return $this->render('contact', ['model' => $model, 'content' => $content]);
    }


}

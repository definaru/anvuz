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
use frontend\data\partner\Blocks as BlocksPartner;
use frontend\data\science\Blocks as BlocksScience;
use frontend\models\UniversitySearch;
use frontend\models\NewsSearch;
use frontend\models\News;
use frontend\models\University;
use frontend\models\Documents;

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
                        'roles' => ['?', '@'],
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


    public function actionAbout($href = '')
    {
        $content = BlocksAbout::list();
        return $this->render('about', compact('content', 'href'));
    }


    public function actionEvents()
    {
        return $this->render('events');
    }


    public function actionPartner()
    {
        $content = BlocksPartner::list();

        $searchModel = new UniversitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('partner', compact('content', 'searchModel', 'dataProvider'));
    }


    public function actionDocuments()
    {
        $content = BlocksDocuments::list();
        return $this->render('documents', compact('content'));
    }


    public function actionDocument($href)
    {
        //$href = Yii::$app->request->get('href');
        $model = Documents::find()->where(['href' => $href])->one();
        return $this->render('document', ['model' => $model]);
    }


    public function actionManagement()
    {
        $content = BlocksManagement::list();
        return $this->render('management', compact('content'));
    }


    public function actionScience()
    {
        $content = BlocksScience::list();
        $filePath = Yii::getAlias('@frontend/web/data/vak.md');
        $file = file_get_contents($filePath);
        return $this->render('science', compact('content', 'file'));
    }

    
    public function actionNews($href = '')
    {
        $content = BlocksNews::list();
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 9;

        $new = $href !== '' ? News::find()->where(['href' => $href])->one() : '';
        return $this->render('news', compact('content', 'searchModel', 'dataProvider', 'new'));
    }

    public function actionUniversity($href = '')
    {
        $model = University::find()
            ->with('profile', 'contact')
            ->where(['href' => $href])
            ->one();
                
        $searchModel = new UniversitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 5;

        return $this->render('university', [
            'model' => $model, 
            'dataProvider' => $dataProvider
        ]);
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

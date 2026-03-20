<?php

namespace frontend\modules\sitemap\controllers;

use Yii;
use yii\web\Controller;
// use yii\filters\VerbFilter;
// use yii\filters\AccessControl;


class SitemapController extends Controller
{

    public function actionPage()
    {
        return $this->render('page');
    }

    public function actionIndex()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_XML;
        return [
            'urlset' => [
                '@attributes' => ['xmlns' => 'http://www.sitemaps.org/schemas/sitemap/0.9'],
                'url' => [
                    ['loc' => 'http://mysite.com/', 'priority' => '1.0'],
                    ['loc' => 'http://mysite.com/about', 'priority' => '0.8'],
                ],
            ],
        ];
    }

}
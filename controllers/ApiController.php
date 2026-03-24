<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
//use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\University;
use frontend\models\Profiles;
use yii\helpers\FileHelper;


class ApiController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                //'only' => ['university'],
                'rules' => [
                    [
                        'actions' => ['index', 'image', 'introduction', 'university', 'universities'],
                        'allow' => true,
                        'roles' => ['?', '@'],
                    ]
                ]
            ]
        ];
    }

    public function beforeAction($action)
    {
        if ($action->id === 'image' || $action->id === 'introduction') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    public function Responce($res)
    {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        return $response->data = $res;
    }


    public function actionIndex()
    {
        $res = Profiles::find()
            ->with('city', 'section', 'contacts')
            ->orderBy(['section' => SORT_ASC])
            ->where(['is not', 'section', null])
            ->asArray()
            ->all();

        return self::Responce($res);
    }

    public function actionImage()
    {
        $file = UploadedFile::getInstanceByName('file');
        if ($file === null) {
            return self::Responce(['error' => 'Файл не получен']);
        }
        $folder = '/data/news/photo/' . uniqid();
        $absoluteFolder = Yii::getAlias('@frontendWeb') . $folder;
        if (!is_dir($absoluteFolder)) {
            FileHelper::createDirectory($absoluteFolder);
        }
        $filename = rand() . '.' . $file->extension;
        $absolutePath = $absoluteFolder . '/' . $filename;
        if (!$file->saveAs($absolutePath)) {
            return self::Responce(['error' => 'Не удалось сохранить файл']);
        }
        $url = $folder . '/' . $filename;
        $res = ['url' => $url, 'file' => $file];
        return self::Responce($res);
    }


    public function actionIntroduction()
    {
        $data = Yii::$app->request->getBodyParams();
        $res = [
            'success' => true,
            'data' => $data
        ];
        return self::Responce($res);
    }


    public function actionUniversity()
    {
        $res = University::find()
            ->with('profile', 'contact')
            ->asArray()
            ->all();

        return self::Responce($res);
    }

    public function actionUniversities($region)
    {
        $res = University::find()
            ->with('profile', 'contact')
            ->where(['region' => $region])
            ->asArray()
            ->all();

        return self::Responce($res);
    }

}
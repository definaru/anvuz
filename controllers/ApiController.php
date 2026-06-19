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
                        'actions' => ['index', 'image', 'news-image', 'delete-newsimage', 'editor-markdown', 'introduction', 'university', 'universities'],
                        'allow' => true,
                        'roles' => ['?', '@'],
                    ]
                ]
            ]
        ];
    }

    public function beforeAction($action)
    {
        if (
            $action->id === 'image' || 
            $action->id === 'introduction' || 
            $action->id === 'news-image' || 
            $action->id === 'delete-newsimage' ||
            $action->id === 'editor-markdown'
        ) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    public function Responce(array $res)
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


    public function actionNewsImage(string $record)
    {
        $file = UploadedFile::getInstanceByName('file');
        if ($file === null) return self::Responce(['error' => 'Файл не получен']);
        $folder = '/site/image/news/' . $record;
        $absoluteFolder = Yii::getAlias('@frontendWeb') . $folder;
        if (!is_dir($absoluteFolder)) {
            FileHelper::createDirectory($absoluteFolder);
        }
        $filename = $file->baseName . '.' . $file->extension;
        $absolutePath = $absoluteFolder . '/' . $filename;
        if (!$file->saveAs($absolutePath)) return self::Responce(['error' => 'Не удалось сохранить файл']);
        $url = $folder . '/' . $filename;
        $res = ['url' => $url];
        return self::Responce($res);
    }


    public function actionDeleteNewsimage(string $folder)
    {
        $filePath = Yii::getAlias('@frontendWeb') . $folder;
        if (unlink($filePath)) {
            $res = [
                'code' => 200,
                'success' => true,
                'message' => 'Файл успешно удален.'
            ];
        } else {
            $res = [
                'code' => 500,
                'success' => false,
                'message' => 'Ошибка при удалении файла.'
            ];
        }
        return self::Responce($res);
    }


    public function actionEditorMarkdown(string $folder, string $text)
    {
        $file = Yii::getAlias('@frontendWeb') . '/data/news/';
        if(!is_dir($file)) {
            FileHelper::createDirectory($file);
        }
        $path = $file.$folder.'.md';
        if ($text) {
            $fp = fopen($path, "wr+");
            fwrite($fp, $text);
            fclose($fp);
            $res = [
                'code' => 200,
                'success' => true,
                'message' => 'Статья успешно записана'
            ];      
            return self::Responce($res);      
        }       
    }


    public function actionIntroduction()
    {
        $data = Yii::$app->request->getBodyParams();
        $res = [
            'code' => 200,
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

    public function actionUniversities(string $region)
    {
        $res = University::find()
            ->with('profile', 'contact')
            ->where(['region' => $region])
            ->asArray()
            ->all();

        return self::Responce($res);
    }

}
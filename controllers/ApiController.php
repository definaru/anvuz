<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\View;
//use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\University;
use frontend\models\Profiles;
use frontend\models\Slider;
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
                        'actions' => [
                            'index', 
                            'image', 
                            'news-image', 
                            'delete-newsimage', 
                            'editor-markdown', 
                            'introduction', 
                            'university', 
                            'universities',
                            'slider-sortable',
                            'open-menu'
                        ],
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
            $action->id === 'editor-markdown' ||
            $action->id === 'slider-sortable' ||
            $action->id === 'open-menu'
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
        $post = Yii::$app->request->post();
        $file = UploadedFile::getInstanceByName('file');
        if ($file === null) {
            return self::Responce(['error' => 'Файл не получен']);
        }
        $folder = '/data/news/photo/' . $post['folder'];
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


    public function actionEditorMarkdown()
    {
        $post = Yii::$app->request->post();
        $folder = $post['folder'];
        $content = $post['content'];
        $file = Yii::getAlias('@frontendWeb') . '/data/news/';
        //if(!is_dir($file)) {
        FileHelper::createDirectory($file);
        //}
        $path = $file.$folder.'.md';
        if ($content) {
            $fp = fopen($path, "wr+");
            fwrite($fp, $content);
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


    /** @var array $res */
    public function actionSliderSortable()
    {
        $order = Yii::$app->request->post('order');
        $transaction = Yii::$app->db->beginTransaction();
        $res = [];
        try {
            foreach ($order as $index => $id) {
                $model = Slider::findOne($id);
                if ($model) {
                    $model->sort_order = $index + 1; // 1-based index
                    if (!$model->save()) {
                        throw new \Exception('Ошибка сохранения модели ID: ' . $id);
                    }
                }
            }
            $transaction->commit();
            $res = [
                'success' => true,
                'message' => 'Порядок успешно обновлён'
            ];
        } catch (\Exception $e) {
            $transaction->rollBack();
            $res = [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
        return self::Responce($res);
    }

    public function actionOpenMenu()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $isOpen = Yii::$app->request->post('isOpen');
        Yii::$app->session->set('sidebar_open', $isOpen);
        return ['success' => true, 'currentState' => $isOpen];
    }

}
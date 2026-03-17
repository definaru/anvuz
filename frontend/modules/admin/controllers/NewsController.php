<?php
namespace frontend\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use frontend\models\NewsSearch;
use frontend\models\News;


class NewsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::class,
                'only' => ['list', 'create', 'view', 'update', 'delete'],
                'rules' => [
                    ['actions' => ['list'],   'allow' => true, 'roles' => ['@']],
                    ['actions' => ['create'], 'allow' => true, 'roles' => ['@']],
                    ['actions' => ['view'],   'allow' => true, 'roles' => ['@']],
                    ['actions' => ['update'], 'allow' => true, 'roles' => ['@']],
                    ['actions' => ['delete'], 'allow' => true, 'roles' => ['@']],
                ],
            ],
        ];
    }


    public function actionList()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = News::find()->all();

        return $this->render('list', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findModel($id)]);
    }


    public function actionArchive()
    {
        return $this->render('archive');
    }


    public function actionCreate()
    {
        $model = new News();
        $model->create_date = time();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', ['model' => $model]);
    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', ['model' => $model]);
    }


    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
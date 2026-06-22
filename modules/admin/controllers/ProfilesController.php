<?php
namespace frontend\modules\admin\controllers;

use Yii;
use frontend\models\Profiles;
use frontend\models\ProfilesSearch;
use frontend\modules\auth\models\User;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;


class ProfilesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }


    public function actionAccount()
    {
        $model = User::find()->where(['id' => Yii::$app->user->identity->id])->one();
        return $this->render('account', ['model' => $model]);
    }


    public function actionIndex()
    {
        $searchModel = new ProfilesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @param int $id
     */
    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findModel($id)]);
    }


    public function actionCreate()
    {
        $model = new Profiles();
        $model->create_date = time();
        $model->profile();
        if ($model->load($this->request->post())) {
            $model->upload($model->uuid);
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', ['model' => $model]);
    }

    /**
     * @param int $id
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load($this->request->post())) {
            $model->upload($model->uuid);
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', ['model' => $model]);
    }

    /**
     * @param int $id
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Profiles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Profiles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profiles::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

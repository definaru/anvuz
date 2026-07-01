<?php
namespace frontend\modules\admin\controllers;

//use Yii;
use frontend\modules\auth\models\User;
//use frontend\modules\auth\models\EditUser;
use frontend\models\AuthAssignment;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;


class UsersController extends Controller
{

    /** @inheritDoc */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => ['delete' => ['POST']]
            ]
        ];
    }

    /** @param int $id */
    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findModel($id)]);
    }


    /** @param int $id */
    public function actionRole($id)
    {
        $model = AuthAssignment::find()->where(['user_id' => $id])->one();
        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect('/admin/users');
        }
        return $this->render('role', ['model' => $model]);
    }


    /** @param int $id */
    public function actionUpdate($id)
    {
        // EditUser::update($id);
        $model = $this->findModel($id);
        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect('/admin/users');
        }
        return $this->render('update', ['model' => $model]);
    }


    /** @param int $id */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect('/admin/users');
    }
    
    /**
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
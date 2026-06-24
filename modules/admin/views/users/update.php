<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\modules\auth\models\User $model */

$this->title = 'Редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['admin/users']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12 col-md-7">
        <?=Html::tag('h1', $this->title);?>
        <?=$this->render('_form', ['model' => $model]);?>        
    </div>
</div>

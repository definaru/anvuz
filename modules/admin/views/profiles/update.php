<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Profiles $model */

$this->title = 'Редактирование профиля';
$this->params['breadcrumbs'][] = ['label' => 'Профили', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firstname.' '.$model->lastname, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12 col-md-7">
        <?=Html::tag('h1', $this->title);?>
        <?=$this->render('_form', ['model' => $model]);?>        
    </div>
</div>

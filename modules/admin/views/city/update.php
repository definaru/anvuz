<?php
    use yii\helpers\Html;
    /** @var frontend\models\City $model */

    $this->title = 'Редактирование';
    $this->params['breadcrumbs'][] = ['label' => 'Геолокация', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => $model->namecity, 'url' => ['view', 'id' => $model->id]];
    $this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="col-12 col-md-6">
    <div class="card border-0 shadow-sm p-4">
        <?=$this->render('_form', ['model' => $model]);?>
    </div>    
</div>
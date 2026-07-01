<?php
    use yii\helpers\Html;

    /** @var yii\web\View $this */
    /** @var frontend\models\Applications $model */

    $this->title = 'Создать Заявку';
    $this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="col-12 col-md-6">
    <div class="card border-0 shadow-sm p-4">
        <?=$this->render('_form', ['model' => $model]);?>
    </div>    
</div>
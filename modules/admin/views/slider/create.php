<?php
    use yii\helpers\Html;
    /** @var yii\web\View $this */
    /** @var frontend\models\Profiles $model */
    $this->title = 'Создать слайд';
    $this->params['breadcrumbs'][] = ['label' => 'Слайд-шоу', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12 col-md-6">
        <h1><?=Html::encode($this->title);?></h1>
        <?= $this->render('_form', ['model' => $model]);?>
    </div>
</div>
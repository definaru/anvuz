<?php
    use yii\helpers\Html;
    /** @var yii\web\View $this */
    /** @var frontend\models\Documents $model */
    $this->title = 'Создать документ';
    $this->params['breadcrumbs'][] = ['label' => 'Документы', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="card border-0 shadow-sm p-3">
    <?= $this->render('_form', ['model' => $model]);?>
</div>

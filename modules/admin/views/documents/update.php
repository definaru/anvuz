<?php
    /** @var yii\web\View $this */
    /** @var frontend\models\Documents $model */
    $this->title = 'Редактирование документа';
    $this->params['breadcrumbs'][] = ['label' => 'Документы', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="card border-0 shadow-sm p-3">
    <?= $this->render('_form', ['model' => $model]);?>
</div>
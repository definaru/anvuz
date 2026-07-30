<?php
    /** @var yii\web\View $this */
    /** @var frontend\models\Pages $model */
    $this->title = 'Обновление страницы: ' . $model->title;
    $this->params['breadcrumbs'][] = ['label' => 'Страницы сайта', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
    $this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="pages-update">
    <?= $this->render('_form', ['model' => $model]);?>
</div>
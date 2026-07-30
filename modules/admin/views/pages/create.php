<?php
    /** @var yii\web\View $this */
    /** @var frontend\models\Pages $model */
    $this->title = 'Создание страницы';
    $this->params['breadcrumbs'][] = ['label' => 'Страницы сайта', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-create">
    <?=$this->render('_form', ['model' => $model]);?>
</div>
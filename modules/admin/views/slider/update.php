<?php
    /** @var yii\web\View $this */
    /** @var frontend\models\Slider $model */
    $this->title = $model->sort_order.' слайд';
    $this->params['breadcrumbs'][] = ['label' => 'Слайд-шоу', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
    $this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="row">
    <div class="col-12 col-md-9">
        <?= $this->render('_form', ['model' => $model]) ?>
    </div>
</div>

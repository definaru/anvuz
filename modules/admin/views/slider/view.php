<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Slider $model */

$this->title = 'Просмотр слайда';
$this->params['breadcrumbs'][] = ['label' => 'Слайд-шоу', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card border-0 shadow-sm p-3">
    <div class="d-grid gap-3">
        <?=$model->image !== '' ? Html::img($model->image, ['class' => 'rounded w-100']) : '';?>
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'title',
                //'image',
                [
                    'attribute' => 'subtitle',
                    'format' => 'raw',
                    'value' => $model->subtitle,
                    'visible' => !empty($model->subtitle)
                ],
                [
                    'attribute' => 'description',
                    'format' => 'raw',
                    'value' => $model->description,
                    'visible' => !empty($model->description)
                ],
                [
                    'attribute' => 'link',
                    'format' => 'raw',
                    'value' => $model->link,
                    'visible' => !empty($model->link)
                ],
                [
                    'attribute' => 'sort_order',
                    'format' => 'raw',
                    'value' => $model->sort_order.' слайд'
                ],
                [
                    'attribute' => 'is_public',
                    'format' => 'raw',
                    'value' => $model->is_public === 1 ? 'да' : 'нет'
                ],
                [
                    'attribute' => 'target',
                    'format' => 'raw',
                    'value' => $model->target === 1 ? 'да' : 'нет'
                ],
                [
                    'attribute' => 'create_date',
                    'format' => 'raw',
                    'value' => Yii::$app->formatter->asDateTime($model->create_date, 'php: j F Y / H:i')
                ]
                //'update_date',
            ],
        ]);?>
    </div>

    <div class="d-block mt-2">
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary px-4']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger px-4',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить данный профиль ?',
                'method' => 'post',
            ],
        ]) ?>
    </div>    
</div>
<?php
    use yii\helpers\Html;
    use yii\widgets\DetailView;

    /** @var frontend\models\Profiles $model */

    $this->title = $model->firstname;
    $this->params['breadcrumbs'][] = ['label' => 'Профили', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="card border-0 shadow-sm p-3">
    <div class="d-flex gap-3">
        <?=$model->image !== '' ? Html::img($model->image, ['class' => 'rounded', 'style' => 'width: 210px;height:210px']) : '';?>
        <?=DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                [
                    'label' => 'Ф.И.О.',
                    'value' => $model->lastname.' '.$model->firstname.' '.$model->middlename
                ],
                // 'uuid',
                'position',
                [
                    'attribute' => 'city',
                    'value' => $model->location->namecity, 
                ],
                [
                    'attribute' => 'section',
                    'value' => $model->sections->name ?? '-', 
                ],
                [
                    'attribute' => 'create_date',
                    'value' => Yii::$app->formatter->asDateTime($model->create_date, 'php: j F, Y H:i:s')
                ]
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
<pre><?php // var_dump($model->sections);?></pre>
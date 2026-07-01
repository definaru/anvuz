<?php
    use yii\helpers\Html;
    use yii\widgets\DetailView;

    /** @var yii\web\View $this */
    /** @var frontend\models\Applications $model */

    $this->title = 'Просмотр заявки';
    $this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="card border-0 shadow-sm p-3">
    <?=DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => Html::tag('strong', $model->title)
            ],
            'person',
            'email:email',
            'phone',
            'href',
            [
                'attribute' => 'date_create',
                'value' => Yii::$app->formatter->asDateTime($model->date_create, 'php: j F, Y H:i:s'),
            ],
        ],
    ]);?>
    <div>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary px-4']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger px-4',
            'data' => [
                'confirm' => 'Удалить эту заявку ?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
</div>
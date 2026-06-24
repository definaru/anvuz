<?php
    use yii\helpers\Html;
    use yii\widgets\DetailView;

    /** @var frontend\models\Profiles $model */

    $this->title = $model->firstname;
    $this->params['breadcrumbs'][] = ['label' => 'Профили', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="profiles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить данный профиль ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?=DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'image',
            'firstname',
            'lastname',
            'middlename',
            //'uuid',
            'position',
            [
                'attribute' => 'city',
                'value' => $model->location->namecity, 
            ],
            [
                'attribute' => 'section',
                'value' => $model->sections->name ?? '-', 
            ],
            'create_date'
        ],
    ]);?>
</div>
<pre><?php // var_dump($model->sections);?></pre>
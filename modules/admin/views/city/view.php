<?php
    use yii\helpers\Html;
    use yii\widgets\DetailView;

    /** @var frontend\models\City $model */
    $this->title = $model->namecity;
    $this->params['breadcrumbs'][] = ['label' => 'Геолокация', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12 col-md-6">
        <h1><?= Html::encode($this->title) ?></h1>
        <?=DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'namecity',
                'region',
            ],
        ]) ?>
        <p>
            <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    </div>    
</div>


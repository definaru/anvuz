<?php
    use yii\helpers\Html;
    use yii\grid\GridView;

    /** @var yii\web\View $this */
    /** @var frontend\models\DocumentsSearch $searchModel */
    /** @var yii\data\ActiveDataProvider $dataProvider */

    $this->title = 'Документы';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="documents-index">
    <div class="d-flex align-items-center justify-content-between flex-column flex-md-row mb-3">
        <h1><?=Html::encode($this->title);?></h1>
        <div>
            <?=Html::a('Создать документ', ['create'], ['class' => 'btn btn-success']);?>
        </div>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'layout' => '{items}',
        'emptyTextOptions' => ['tag' => 'p', 'class' => 'text-center text-danger'],
        'emptyText' => 'По вашему запросу ничего не найдено', 
        'tableOptions' => ['class' => 'table table-hover mb-0'],
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn', 
                'headerOptions' => ['class' => 'ps-4', 'style' => 'vertical-align: middle; width:40px'],
                'contentOptions' => [
                    'class' => 'ps-4',
                    'style' => 'vertical-align: middle'
                ],
            ],

            //'id',
            'title',
            'body:ntext',
            'href',
            'date_create',
            //'date_update',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Настройки',
                'headerOptions' => ['width' => '80'],
                'template' => '{view} {update} {delete}',
            ]
        ],
    ]); ?>


</div>

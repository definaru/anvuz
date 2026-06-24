<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use frontend\modules\admin\models\AdminPanel;

    /** @var frontend\models\CitySearch $searchModel */
    /** @var yii\data\ActiveDataProvider $dataProvider */

    $this->title = 'Геолокация';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-index">
    <div class="d-flex align-items-center justify-content-between">
        <h1><?= Html::encode($this->title) ?></h1>
        <?=Html::a('Добавить локацию', ['create'], ['class' => 'btn btn-success']);?>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <?=GridView::widget([
                    'dataProvider' => $dataProvider,
                    //'filterModel' => $searchModel,
                    'layout' => '{items}',
                    'emptyTextOptions' => ['tag' => 'p', 'class' => 'text-center text-danger'],
                    'emptyText' => 'По вашему запросу ничего не найдено', 
                    'tableOptions' => ['class' => 'table table-hover mb-0'],
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn', 
                            'headerOptions' => ['width' => '40']
                        ],
                        //'id',
                        'namecity',
                        'region',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Настройки',
                            'headerOptions' => ['width' => '80'],
                            'template' => '{view} {update} {delete}',
                        ]
                    ]
                ]);?>                
            </div>
            <div class="card-footer bg-white border-top-0">
                <?=AdminPanel::pagination($dataProvider);?>
            </div>            
        </div>

</div>

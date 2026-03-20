<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    //$this->header = 'Список новостей';
    $this->title = 'Список новостей';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row g-3 py-3">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    //'filterModel' => $searchModel,
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn', 
                            'headerOptions' => ['width' => '40']
                        ],
                        [
                            'attribute' => 'image',
                            'format' => 'raw',
                            'headerOptions' => ['width' => '150'],
                            'content' => function($data){ 
                                return Html::img($data->image, [
                                    'class' => 'thumbnail w-100'
                                ]);
                            }
                        ],
                        'title',
                        [
                            'attribute' => 'create_date',
                            'value' => function($data) {
                                return Yii::$app->formatter->asDateTime($data->create_date, 'php: j F, Y');
                            }
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Настройки',
                            'headerOptions' => ['width' => '80'],
                            'template' => '{view} {update} {delete}',
                        ],
                    ],
                ]);?>                
            </div>
        </div>
    </div>
</div>

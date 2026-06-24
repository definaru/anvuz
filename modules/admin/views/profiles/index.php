<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use frontend\modules\admin\models\AdminPanel;

    /** @var frontend\models\ProfilesSearch $searchModel */
    /** @var yii\data\ActiveDataProvider $dataProvider */

    $this->title = 'Профили';
    $this->params['breadcrumbs'][] = $this->title;
    $totalCount = $dataProvider->totalCount;
?>
<div class="d-flex align-items-center justify-content-between">
    <?=Html::tag('h1', $this->title);?>    
    <?=Html::tag('p', 'Всего ' . $totalCount . ' профилелей', ['class' => 'text-secondary m-0']);?>
</div>

<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<div class="row g-3 py-3">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
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
                            'headerOptions' => ['width' => '50', 'style' => 'text-align: center'],
                            'contentOptions' => [
                                'class' => 'ps-4',
                                'style' => 'vertical-align: middle'
                            ],
                        ],
                        [
                            'attribute' => 'image',
                            'format' => 'raw',
                            'headerOptions' => ['width' => '50'],
                            'contentOptions' => [
                                'style' => 'text-align: right'
                            ],
                            'content' => function($data){ 
                                return Html::img($data->image, [
                                    'style' => 'width: 50px; height: 50px; object-fit: cover',
                                    'class' => 'thumbnail rounded-circle'
                                ]);
                            }
                        ],
                        [
                            'label' => 'ФИО',
                            'format' => 'raw',
                            'contentOptions' => [
                                'style' => 'vertical-align: middle'
                            ],
                            'value' => function($data) {
                                return Html::tag('div', $data->firstname.' '.$data->middlename.' '.$data->lastname, ['class' => 'fw-semibold']);
                            }
                        ],
                        [
                            'attribute' => 'create_date',
                            'format' => 'raw',
                            'contentOptions' => [
                                'style' => 'vertical-align: middle'
                            ],
                            'value' => function($data) {
                                $datetime = Yii::$app->formatter->asDateTime($data->create_date, 'php: j F, Y');
                                return Html::tag('small', $datetime, ['class' => 'text-muted small']);
                            }
                        ],
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
</div>
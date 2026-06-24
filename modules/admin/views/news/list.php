<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use frontend\modules\admin\models\AdminPanel;
    /** @var frontend\models\NewsSearch $dataProvider */
    /** @var frontend\models\NewsSearch $searchModel */

    $totalCount = $dataProvider->totalCount;
    $this->title = 'Список новостей';
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class="d-flex align-items-center gap-2">
    <?= Html::tag('h1', $this->title);?>
    <?= Html::tag('span', $totalCount, ['class' => 'badge text-bg-primary']);?>
</div>

<div class="row g-3 py-3">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'layout' => '{items}',
                    'emptyTextOptions' => ['tag' => 'p', 'class' => 'text-center text-danger'],
                    'emptyText' => 'По вашему запросу ничего не найдено', 
                    'tableOptions' => ['class' => 'table table-hover mb-0'],
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
                                return Html::a(
                                    Html::img($data->image, ['class' => 'thumbnail w-100']), 
                                    '/admin/news/view?id='.$data->id
                                );
                            },
                            'filter' => false
                        ],
                        [
                            'attribute' => 'title',
                            'format' => 'raw',
                            'contentOptions' => ['style' => 'vertical-align:middle'],
                            'content' => function($data){
                                return Html::a(
                                    $data->title, 
                                    '/admin/news/view?id='.$data->id, 
                                    ['class' => 'text-decoration-none text-dark fs-5 w-75 d-block']
                                );
                            },
                            'filterInputOptions' => [
                                'type' => 'search',
                                'placeholder' => 'Поиск по названию...', 
                                'class' => 'form-control'
                            ],
                        ],
                        [
                            'attribute' => 'create_date',
                            'value' => function($data) {
                                return Yii::$app->formatter->asDateTime($data->create_date, 'php: j F, Y');
                            },
                            'filter' => false
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

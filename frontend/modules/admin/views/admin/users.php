<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    $totalCount = $dataProvider->totalCount;
    $this->title = 'Профили';
?>
<?=Html::tag('p', 'Список пользователей (' . $totalCount . ')', ['class' => 'text-secondary m-0']);?>
<?= Html::tag('h1', $this->title);?>
<div class="row g-3 py-3">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
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
                        // 'position',
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
                        ],
                    ]
                ]);?>
            </div>
            <div class="card-footer bg-white border-top-0">
                <?=GridView::widget([
                    'dataProvider' => $dataProvider,  
                    'showHeader' => false,
                    'showOnEmpty' => false,
                    'summary' => 'Страницы: {page} из {pageCount}',
                    'layout' => '<div class="d-flex align-items-center justify-content-between">{pager}<span class="btn">{summary}</span></div>',
                    'pager' => [
                        'maxButtonCount' => 10, // максимум 10 кнопок
                        'options' => ['class' => 'pagination m-0'],
                        'linkOptions' => ['class' => 'page-link'],
                        'pageCssClass' => ['class' => 'page-item'],
                        'registerLinkTags' => false,
                        'nextPageCssClass' => 'page-item next',
                        'prevPageCssClass' => 'page-item prev',
                        'disabledPageCssClass' => 'disabled',
                        'nextPageLabel' => '<div aria-hidden="true">&raquo;</div>', // стрелочка в право
                        'prevPageLabel' => '<div aria-hidden="true">&laquo;</div>', // стрелочка влево
                        'disabledListItemSubTagOptions' => ['tag' => 'div', 'class' => 'page-link', 'aria-label' => 'Next']
                        //'firstPageLabel' => 'Начало',
                        //'lastPageLabel' => 'Конец'
                    ],  
                ]);?>
            </div>
        </div>  
    </div>  
</div>
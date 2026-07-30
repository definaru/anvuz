<?php
    use yii\web\View;
    use yii\helpers\Html;
    use yii\grid\GridView;
    use frontend\modules\admin\models\AdminPanel;
    use frontend\components\toastr\Toastr;
    /** @var frontend\models\SliderSearch $searchModel */
    /** @var yii\data\ActiveDataProvider $dataProvider */
    $totalCount = $dataProvider->totalCount;

    $this->title = 'Слайд-шоу';
    $this->params['breadcrumbs'][] = $this->title;

    $this->registerJsFile('@web/ui-admin/js/Sortable.min.js', ['position' => View::POS_END]);
    $this->registerJs(<<<JS
        let sortable = document.querySelector('#slider tbody');
        function getCurrentOrder() {
            let ids = [];
            sortable.querySelectorAll('tr').forEach(function(row) {
                let id = row.dataset.key;
                if (id) ids.push(parseInt(id));
            });
            return ids;
        }
        new Sortable(sortable, {
            handle: '.handle',
            animation: 150,
            onEnd: async function(evt) {
                let newOrder = getCurrentOrder();
                console.log('newOrder:', newOrder);
                const response = await fetch('/api/v1/slider-sortable', {
                    method: "POST",
                    headers: {"Content-Type": "application/json"},
                    redirect: "follow",
                    referrerPolicy: "no-referrer",
                    body: JSON.stringify({order: newOrder}),
                });
                const request = await response.json();
                console.log('request:', request);
                if(request.success === true) {
                    toastr.success(request.message, 'Готово');
                } else {
                    toastr.error(request.message, 'Ошибка!')
                }
                return request;
            }
        });
    JS);
    $this->registerCss('
        .grabable {
            cursor: grab; 
        }
        .grabable:active {
            cursor: grabbing;       
        }
        .toast-success {
            background-color: #51A351 !important;
        }
        .toast-error {
            background-color: #e92c1e !important;
        }
    ');
?>
<div class="d-flex align-items-center justify-content-between">
    <?=Html::tag('h1', $this->title);?>    
    <?=Html::tag('p', 'Всего ' . $totalCount . ' слайдов', ['class' => 'text-secondary m-0']);?>
    <?=Html::a('Добавить', ['create'], ['class' => 'btn btn-success px-4']);?>
</div>
<div class="row g-3 py-3">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    //'filterModel' => $searchModel,
                    'layout' => '{items}',
                    'emptyTextOptions' => ['tag' => 'p', 'class' => 'text-center text-danger'],
                    'emptyText' => 'По вашему запросу ничего не найдено', 
                    'tableOptions' => ['id' => 'slider', 'class' => 'table table-hover mb-0'],
                    'columns' => [
                        [
                            'class' => 'frontend\components\ui\grid\DragblColumn',
                            'headerOptions' => ['width' => '50', 'style' => 'text-align: center'],
                            'contentOptions' => [
                                'class' => 'ps-3 handle',
                                'style' => 'vertical-align: middle'
                            ],
                        ],
                        //'id',
                        //'title',
                        //'subtitle',
                        //'description:ntext',
                        [
                            'attribute' => 'image',
                            'format' => 'raw',
                            'headerOptions' => ['width' => '150'],
                            'contentOptions' => [
                                'style' => 'vertical-align: middle'
                            ],
                            'content' => function($data){ 
                                return Html::img($data->image, [
                                    'style' => 'width: 100px',
                                    'class' => 'thumbnail rounded'
                                ]);
                            }
                        ],
                        //'link',
                        [
                            'attribute' => 'sort_order',
                            'format' => 'raw',
                            'contentOptions' => [
                                'style' => 'vertical-align: middle'
                            ],
                            'content' => function($data){ 
                                return $data->sort_order.' место';
                            }
                        ],
                        //'is_public',
                        //'target',
                        [
                            'attribute' => 'create_date',
                            'format' => 'raw',
                            'contentOptions' => [
                                'style' => 'vertical-align: middle'
                            ],
                            'value' => function($data) {
                                $datetime = \Yii::$app->formatter->asDateTime($data->create_date, 'php: j F, Y');
                                return Html::tag('small', $datetime, ['class' => 'text-muted small']);
                            }
                        ],
                        //'update_date',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Настройки',
                            'headerOptions' => ['width' => '80'],
                            'template' => '{view} {update} {delete}',
                        ]
                    ],
                ]); ?>

            </div>
            <div class="card-footer bg-white border-top-0">
                <?=AdminPanel::pagination($dataProvider);?>
            </div>
        </div>
    </div>
</div>
<?=Toastr::widget([
    'clientOptions' => ['positionClass' => 'toast-bottom-right']
]);?>
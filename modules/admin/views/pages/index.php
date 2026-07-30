<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use frontend\modules\admin\models\AdminPanel;

    /** @var yii\web\View $this */
    /** @var frontend\models\PagesSearch $searchModel */
    /** @var yii\data\ActiveDataProvider $dataProvider */

    $this->title = 'Страницы сайта';
    $this->params['breadcrumbs'][] = $this->title;
    $totalCount = $dataProvider->totalCount == 0 ? 'Нет страниц' : 'Всего ' . $dataProvider->totalCount . ' страниц';
?>
<div class="d-flex align-items-center justify-content-between">
    <?=Html::tag('h1', $this->title);?>    
    <?=Html::tag('p', $totalCount, ['class' => 'text-secondary m-0']);?>
    <?=Html::a('Создать страницу', ['create'], ['class' => 'btn btn-success px-4']);?>
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
                            'class' => 'yii\grid\SerialColumn', 
                            'headerOptions' => ['class' => 'ps-4', 'style' => 'vertical-align: middle; width:40px'],
                            'contentOptions' => [
                                'class' => 'ps-4',
                                'style' => 'vertical-align: middle'
                            ],
                        ],

                        //'id',
                        'title',
                        //'slug',
                        //'content:ntext',
                        //'uuid',
                        //'is_public',
                        'create_date',
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
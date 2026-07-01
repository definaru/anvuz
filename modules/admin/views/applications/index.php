<?php
    use yii\grid\GridView;
    use common\helpers\Html;
    use common\helpers\PhoneNumberFormatter;

    /** @var yii\web\View $this */
    /** @var frontend\models\ApplicationsSearch $searchModel */
    /** @var yii\data\ActiveDataProvider $dataProvider */

    $this->title = 'Заявки';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-index">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
        <h1 class="h2"><?= Html::encode($this->title) ?></h1>
        <div>
            <?= Html::a('Создать Заявку', ['create'], ['class' => 'btn btn-success px-4']) ?>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="table-responsive">
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
                    'headerOptions' => ['class' => 'ps-4', 'style' => 'vertical-align: middle; width:40px'],
                    'contentOptions' => [
                        'class' => 'ps-4',
                        'style' => 'vertical-align: middle'
                    ],
                ],
                //'id',
                [
                    'attribute' => 'title',
                    'format' => 'raw',
                    'contentOptions' => [
                        'style' => 'vertical-align: middle'
                    ],
                    'value' => function($data) {
                        //$wrap = Html::tag('div', $data->title, ['class' => 'text-truncate w-50']);
                        return Html::tag('div', $data->title, ['class' => 'd-inline-block text-truncate fw-semibold', 'style' => 'max-width: 400px']);
                    }
                ],
                [
                    'attribute' => 'person',
                    'format' => 'raw',
                    'contentOptions' => [
                        'style' => 'vertical-align: middle'
                    ],
                    'value' => function($data) {
                        return Html::tag('div', $data->person, ['style' => 'width: 250px']);
                    }
                ],
                [
                    'attribute' => 'email',
                    'format' => 'raw',
                    'contentOptions' => [
                        'style' => 'vertical-align: middle'
                    ],
                    'value' => function($data) {
                        return Html::mailto($data->email, null, ['style' => 'width: 210px;display: block']);
                    }
                ],
                [
                    'attribute' => 'phone',
                    'format' => 'raw',
                    //'headerOptions' => ['style' => ''],
                    'contentOptions' => ['style' => 'vertical-align: middle;width: 190px'],
                    'value' => function($data) {
                        $format = $data->phone[0] === '8' ? 
                            PhoneNumberFormatter::standart($data->phone) : 
                            PhoneNumberFormatter::stacionar($data->phone);
                        return Html::tel($format, $data->phone, ['target' => '_black', 'class' => 'text-decoration-none']);
                    }
                ],
                //'href',
                [
                    'attribute' => 'date_create',
                    'format' => 'raw',
                    'contentOptions' => ['style' => 'vertical-align: middle;width: 190px'],
                    'value' => function($data) {
                        $datetime = Yii::$app->formatter->asDateTime($data->date_create, 'php: j F, Y | H:i:s');
                        return Html::tag('small', $datetime, ['class' => 'text-secondary']);
                    },
                    'filter' => false
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Настройки',
                    'headerOptions' => ['width' => '80'],
                    'template' => '{view} {update} {delete}',
                ]
            ],
        ]);?>        
    </div>
</div>
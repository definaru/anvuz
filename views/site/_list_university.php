<?php
    use yii\bootstrap5\Html;
    use yii\widgets\ListView;
?>
<section class="pb-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mb-4">
                <?=Html::tag('h2', $label, ['class' => 'fw-bold m-0 display-4']);?>
            </div>
            <?=ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_itemUniversity',
                'itemOptions' => [
                    'class' => 'col-12 bg-light rounded p-3'
                ],
                'options' => [
                    'tag' => 'div',
                    'class' => 'row g-3',
                    'id' => 'list-wrapper',
                ],
                'layout' => '{items} <div class="d-flex justify-content-center py-4">{pager}</div>',
                'pager' => [
                    'maxButtonCount' => 5, 
                    'options' => ['id' => 'mypager', 'class' => 'pagination'],
                    'linkOptions' => ['class' => "page-link"],
                    'linkContainerOptions' => ['class' => 'page-item'],
                    'disabledListItemSubTagOptions' => [
                        'class' => 'page-link',
                        'aria-label' => 'Next'
                    ]
                ]
            ]);?> 
        </div>
    </div>
</section>
<?php
    use yii\bootstrap5\Html;
    use yii\widgets\ListView;
    $href = Yii::$app->request->get('href');

    $this->blocks['menu'] = 'bg-white';
    $this->blocks['bg'] = $href ? 'bg-white' : 'bs-primary';
    $this->title = $href ? $new->title : 'Новости АНВУЗ';
    $href ? $this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => '/news'] : '';
    $href ? $this->params['breadcrumbs'][] = $this->title : '';
?>
<?php if(!$new) { ?>
<section class="bg-primary position-relative" style="top: -5px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center py-4">
                <?=Html::tag('h2', $this->title, ['class' => 'fw-bold m-0 text-white']);?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<div class="<?=$this->blocks['bg'];?> news">
    <div class="container">
        <div class="row">
            <?php if($new) { ?>
                <?=$this->render('_detail_new', ['new' => $new]);?>
            <?php } else { ?>
                <div class="mb-5 py-5">
                    <?=ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_item',
                        'itemOptions' => [
                            'class' => 'col-12 col-md-4'
                        ],
                        'options' => [
                            'tag' => 'div',
                            'class' => 'row g-3',
                            'id' => 'list-wrapper',
                        ],
                        'layout' => '{items} <div class="d-flex justify-content-center py-4">{pager}</div>',
                        'pager' => [
                            'maxButtonCount' => 3, 
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
            <?php } ?>
        </div>
    </div>    
</div>

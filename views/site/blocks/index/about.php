<?php
    use yii\helpers\Html;
    use frontend\components\icons\Icons;
    use frontend\components\widget\Card;
    $about = $content['content']['about'];

    $this->registerCss('
        #about svg path {fill:#411fab}
        #about .card .btn  {
            color: #411fab !important;
        }
        #about span.text-secondary {
            color: #000 !important;
            font-size: 18px;
            position: relative;
            top: -10px;
        }
    ');
?>
<section id="about" class="py-5 my-5 about">
    <div class="container">
        <div class="row">
            <div class="col-12 text-left">
                <?= Html::tag('h2', Yii::t('app', 'advantage_with_anvuz').':', ['class' => 'fw-bolder display-5 pb-5']);?>
                <!-- <p class="text-secondary">
                    Создание и развитие единого российского образовательного 
                    пространства независимо от формы учредительства 
                    образовательных организаций.
                </p> -->
            </div>
        </div>   
        <div class="row g-3">
            <?php foreach($about as $item) { ?>
                <div class="col-12 col-md-4">
                    <?=Card::widget([
                        'title' => $item['title'],
                        'icon' => $item['icon'],
                        'subtitle' => $item['subtitle'],
                        'padding' => 'p-2',
                        'ratio' => 'ratio-16x9',
                        'position' => 'left',
                        'tag' => 'h2'
                    ]);?>
                </div>
            <?php } ?>
            <div class="col-12 col-md-4">
                <?= Html::a(
                    Yii::t('app', 'join').Icons::arrowRight(),
                    '/auth/introduction',
                    ['class' => 'btn btn-lg btn-primary h-100 px-5 d-flex align-items-center justify-content-center gap-2']
                );?>
            </div>
        </div>
    </div>    
</section>
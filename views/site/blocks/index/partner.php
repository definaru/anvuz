<?php 
    use yii\helpers\Html;
    use frontend\components\widget\Swiper;
    $partner = $content['content']['partner']; 
    $this->registerCss('
        .swiper.partners {
            padding: 30px 0px;
        }
        .swiper-slide {
            width: 100%;
            user-select: none;
            & .title {
                width:100%;
                filter: invert(1);
                margin-top: 30px;
                padding: 0px 25%;
            }
        }
    ');
?>
<section class="py-5">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <?=Html::tag('h2', Yii::t('app', 'our_partners'), ['class' => 'fw-bold m-0 text-dark display-4']);?>
                    <?=Html::a(Yii::t('app', 'all_partners'), '/university', ['class' => 'text-secondary']);?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-5">
                <?php Swiper::begin([
                    'options' => [
                        'id' => 'partners',
                        'arrow' => false,
                        'pagination' => true
                    ],
                    'clientOptions' => [
                        'loop' => true,
                        'slidesPerView' => 4,
                        'spaceBetween' => 15,
                        'breakpoints' => [
                            300 => [
                                'slidesPerView' => 1,
                                'spaceBetween' => 5
                            ],
                            720 => [
                                'slidesPerView' => 2,
                                'spaceBetween' => 10
                            ],
                            960 => [
                                'slidesPerView' => 3,
                                'spaceBetween' => 15
                            ],
                            1140 => [
                                'slidesPerView' => 4,
                                'spaceBetween' => 15
                            ],
                        ],
                        'pagination' => [
                            'el' => '.swiper-pagination',
                            'clickable' => true,
                        ],
                    ],
                ]); ?>
                    <?php foreach($partner as $item) { ?>
                    <div class="swiper-slide">
                        <div class="rounded-4 bg-primary overflow-hidden">
                            <div class="ratio ratio-1x1">
                                <div class="vstack justify-content-between h-100">
                                    <div></div>
                                    <div class="text-center">
                                        <?=Html::img($item['image'], [
                                            'class' => 'title',
                                            'alt' => $item['title']
                                        ]);?>
                                    </div>
                                    <div class="text-center p-4 text-white" style="height: 150px">
                                        <?=Html::tag('h5', $item['title'], ['class' => 'm-0 line-clamp-3']);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php Swiper::end(); ?>                
            </div>
        </div>
    </div>
</section>
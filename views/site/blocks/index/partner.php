<?php
    use yii\helpers\Html;
    use frontend\components\icons\Icons;
    $partner = $content['content']['partner'];             
?>
<section class="py-5 partner">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold m-0 text-dark display-4">Наши партнёры</h2>
                    <a href="/university" class="text-secondary">Все партнёры</a>
                </div>
            </div>
        </div>
        <div class="row g-3 my-5">
            <?php foreach($partner as $item) { ?>
            <div class="col-12 col-md-4">
                <div class="rounded-4 bg-primary overflow-hidden">
                    <div class="ratio ratio-1x1">
                        <div class="vstack justify-content-between h-100">
                            <div></div>
                            <div class="text-center">
                                <?=Html::img($item['image'], ['style' => 'width:200px;filter: invert(1);', 'alt' => $item['title']]);?>
                            </div>
                            <div class="text-center p-4 text-white" style="height: 150px">
                                <?=Html::tag('h5', $item['title'], ['class' => 'm-0 line-clamp-3']);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-12 col-md-4 offset-md-4">
                <a href="/auth/introduction" class="btn btn-lg btn-primary py-3 px-5 d-flex align-items-center justify-content-center gap-2">
                    Присоединиться
                    <?=Icons::arrowRight();?>
                </a>
            </div>
        </div>   
    </div>    
</section>
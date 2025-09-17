<?php
    use yii\helpers\Html;
    $partner = $content['content']['partner'];             
?>
<section class="py-5 partner">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold m-0 text-dark display-4">Наши партнёры</h2>
                    <a href="/partner" class="text-secondary">Все партнёры</a>
                </div>
            </div>
        </div>
        <div class="row g-3 my-5">
            <?php foreach($partner as $item) { ?>
            <div class="col-12 col-md-4">
                <div class="rounded-4 bg-primary overflow-hidden">
                    <a href="#" class="ratio ratio-1x1">
                        <div class="vstack justify-content-between h-100">
                            <div></div>
                            <div class="text-center">
                                <?=Html::img($item['image'], ['style' => 'width:150px', 'alt' => $item['title']]);?>
                            </div>
                            <div class="text-center p-4 text-white" style="height: 150px">
                                <?=Html::tag('h5', $item['title'], ['class' => 'm-0 line-clamp-3']);?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>   
    </div>    
</section>
<?php
    use yii\helpers\Html;
    $news = $content['content']['news'];             
?>
<section class="py-5 bg-primary news">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold m-0 text-white display-4">Новости АНВУЗ</h2>
                    <a href="/news" class="text-white-50">Все новости</a>
                </div>                
            </div>
        </div>
        <div class="row g-3 mb-5 pb-5 pt-3">
            <?php foreach (array_slice($news, 0, 3) as $item) {?>
                <div class="col-12 col-md-4">
                    <div class="card border-0 h-100">
                        <div class="card-header border-0 pb-0">
                            <div class="position-relative pt-2">
                                <div class="position-absolute top-0 start-0 p-3">
                                    <span class="badge text-bg-dark"><?=$item['category'];?></span>
                                </div>
                                <?=Html::a(
                                    Html::img($item['image'], ['class' => 'w-100 rounded-2', 'alt' => $item['title']]),
                                    $item['link']
                                );?>                                    
                            </div>
                        </div>
                        <div class="card-body mb-2">
                            <small class="d-block mb-2 text-primary fw-semibold"><?=$item['datetime'];?></small>
                            <?=Html::a(
                                Html::tag('h4', $item['title'], ['class' => 'fw-bold m-0 line-clamp-3']),
                                $item['link'],
                                ['class' => 'text-decoration-none text-dark']
                            );?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>    
    </div>    
</section>
<?php
    use yii\helpers\Html;
    $events = $content['content']['events'];             
?>
<section class="py-5 bs-primary events">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold m-0 display-4">Мероприятия</h2>
                    <a href="/events" class="text-secondary">Все мероприятия</a>
                </div>
            </div>
        </div>
        <div class="row g-3 py-5">
            <?php foreach($events as $item) { $datetime = explode(' | ', $item['datetime']);?>
            <div class="col-12 col-md-3">
                <div class="card border-0 h-100">
                    <div class="card-header border-0 p-0">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0 p-3">
                                <span class="badge text-bg-dark py-2 px-3"><?=$datetime[0];?></span>
                            </div>
                            <div class="position-absolute top-0 end-0 p-3">
                                <span class="badge text-bg-primary py-2 px-3"><?=$datetime[1];?></span>
                            </div>
                            <?=Html::a(
                                Html::img($item['image'], ['class' => 'w-100 rounded-top', 'alt' => $item['title']]),
                                $item['link']
                            );?>                                    
                        </div>
                    </div>  
                    <div class="card-body border-0">
                        <?=Html::a(
                            Html::tag('h5', $item['title'], ['class' => 'fw-bold m-0 line-clamp-3']),
                            $item['link'],
                            ['class' => 'text-decoration-none text-dark']
                        );?>
                        <p class="text-secondary mt-3"><?=$item['description'];?></p>
                    </div>  
                </div>           
            </div>
            <?php } ?>
        </div>
    </div>    
</section>
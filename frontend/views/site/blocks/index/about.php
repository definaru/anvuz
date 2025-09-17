<?php
    use yii\helpers\Html;
    use frontend\components\icons\Icons;
    $about = $content['content']['about'];
?>
<section class="py-5 my-5 about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
                <h2 class="fw-bolder display-5 pb-4">Миссия АНВУЗ</h2>
                <p class="text-secondary">
                    Создание и развитие единого российского образовательного 
                    пространства независимо от формы учредительства 
                    образовательных организаций.
                </p>
            </div>
        </div>
        <div class="row g-3 my-5">
            <?php foreach($about as $item) { ?>
            <div class="col-12 col-md-3">
                <div class="rounded-3 bs-primary">
                    <a href="<?=$item['href'];?>" class="ratio ratio-1x1">
                        <div class="vstack justify-content-between h-100">
                            <div class="ms-auto p-3 text-dark">
                                <?=Icons::arrowUpRight(60);?>
                            </div>
                            <div class="text-center mb-2 text-primary">
                                <?=$item['icon'];?>
                            </div>
                            <div class="text-center p-4">
                                <?=Html::tag('h4', $item['title']);?>
                            </div>                            
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>    
</section>
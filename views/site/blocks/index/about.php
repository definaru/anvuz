<?php
    //use yii\helpers\Html;
    use frontend\components\icons\Icons;
    use frontend\components\widget\Card;
    $about = $content['content']['about'];
    $this->registerCss('
        #about svg path {fill:#411fab}
    ');
?>
<section id="about" class="py-5 my-5 about">
    <div class="container">
        <?php /*
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
        */ ?>

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
                <a href="/auth/introduction" class="btn btn-lg btn-primary h-100 px-5 d-flex align-items-center justify-content-center gap-2">
                    Присоединиться
                    <?=Icons::arrowRight();?>
                </a>
            </div>
        </div>
    </div>    
</section>
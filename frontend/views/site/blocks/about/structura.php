<?php
    use yii\helpers\Html;
    use frontend\components\widget\Card;
    use frontend\components\icons\Icons;

    $data = [
        [
            'title' => 'Информация об ассоциации',
            'subtitle' => 'Общая информация',
            'href' => '/about/association'
        ],
        [
            'title' => 'Миссия АНВУЗ',
            'subtitle' => 'Сведение об Ассоциации',
            'href' => '/about/mission'
        ],
    ]
?>
<section class="bg-primary position-relative" style="top:-5px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center py-4">
                <?=Html::tag('h2', 'Об ассоциации', ['class' => 'fw-bold m-0 text-white']);?>
            </div>
        </div>
    </div>
</section>
<?php if(empty($href)) { ?>
    <section class="mt-1 py-5">
        <div class="container py-5 mb-4">
            <div class="row py-5">            
                <?php foreach($data as $item) { ?>
                    <div class="col-12 col-md-6">
                        <?php Card::begin([
                            'title' => $item['title'],
                            'icon' => Icons::arrowUpRight(),
                            'subtitle' => $item['subtitle'],
                            'href' => $item['href'],
                            'padding' => 'p-4',
                            'ratio' => 'ratio-16x9',
                            'tag' => 'h1'
                        ]);?>    
                        <?php Card::end(); ?>                
                    </div>
                <?php } ?>   
            </div>
        </div>
    </section>
    <?=$this->render('map');?>
<?php } else { ?>
    <section>
        <div class="container py-5 mb-5">
            <div class="row py-5"> 
                <div class="position-relative z-3">
                    <a href="/about" class="btn mb-3 border-primary text-primary">&larr; Назад</a>
                </div>
                <?=$this->render('_'.$href, ['file' => $href]);?>
            </div>
        </div>        
    </section>
<?php } ?>
<?php
    use yii\helpers\Html;
    use frontend\components\widget\Card;
    use frontend\components\icons\Icons;
    $this->registerCss('
        #about .bs-primary {
            background: #f8f9fa;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
    ');
    $data = [
        [
            'image' => '/data/about/45436е56.png',
            'title' => 'Информация об Ассоциации',
            'subtitle' => 'Общая информация',
            'href' => '/about/association'
        ],
        [
            'image' => '/data/about/4556456е56.jpg',
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
                <?=Html::tag('h2', 'Об Ассоциации', ['class' => 'fw-bold m-0 text-white']);?>
            </div>
        </div>
    </div>
</section>
<?php if(empty($href)) { ?>
    <section id="about" class="mt-1 py-5">
        <div class="container mb-4">
            <div class="row">            
                <?php foreach($data as $item) { ?>
                    <div class="col-12 col-md-6">
                        <?php Card::begin([
                            'title' => $item['title'],
                            'icon' => Icons::arrowUpRight(),
                            //'subtitle' => $item['subtitle'],
                            'href' => $item['href'],
                            'padding' => 'p-4',
                            'ratio' => 'ratio-1x1',
                            'tag' => 'h1'
                        ]);?>  
                            <?=Html::a(
                                Html::img($item['image'], ['class' => 'w-100 rounded-4', 'alt' => $item['title']]), 
                                $item['href']
                            );?>
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
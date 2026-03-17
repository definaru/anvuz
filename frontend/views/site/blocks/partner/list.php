<?php 
    // $filePath = Yii::getAlias('@frontend/web/data/document/'.$href.'.md');
    // $file = file_get_contents($filePath);
    use yii\widgets\ListView;
?> 
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <?=ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_universities',
                    'itemOptions' => [
                        'class' => 'col-12'
                    ],
                    'options' => [
                        'tag' => 'div',
                        'class' => 'row g-3',
                        'id' => 'list-wrapper',
                    ],
                    'layout' => '{items} <div class="d-flex justify-content-center py-4">{pager}</div>',
                    'pager' => [
                        'maxButtonCount' => 3, 
                        'options' => ['id' => 'mypager', 'class' => 'pagination'],
                        'linkOptions' => ['class' => "page-link"],
                        'linkContainerOptions' => ['class' => 'page-item'],
                        'disabledListItemSubTagOptions' => [
                            'class' => 'page-link',
                            'aria-label' => 'Next'
                        ]
                    ]
                ]);?> 


                <?php // Markdown::process($file, 'gfm');?>
                <?php /*
                <?php foreach($content["content"]["partner"] as $item) { ?>
                    <div class="border p-4 mb-5">
                        <h2><?=$item['title'];?></h2>
                        <div class="bg-primary">
                            <img src="<?=$item['logotype'];?>" style="width: 100px" alt="" />
                        </div>
                        <hr>
                        <img src="<?=$item['photo'];?>" class="w-50" alt="" />
                        <p><?=$item['href'];?></p>
                    </div>
                <?php } ?>
                <pre><?php // var_dump($content["content"]["partner"]);?></pre>                
                */ ?>

            </div>
        </div>
    </div>
</section>
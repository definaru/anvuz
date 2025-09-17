<?php
    use common\helpers\Html;
    //use common\helpers\PhoneNumberFormatter;
    $this->registerCss('
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50em;
        }
    ');
?>
<section class="pb-5 bs-primary">
    <div class="container mb-5">
        <div class="row g-3">
            <?php foreach($content['content']['management'] as $item) { ?>
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <img 
                                    src="<?=$item["photo"];?>" 
                                    class="avatar" 
                                    alt="<?=$item["name"];?>" 
                                />
                                <div>
                                    <a href="#" class="text-decoration-none"><strong class="h5 fw-bold"><?=$item["name"];?></strong></a>
                                    <p class="m-0 d-grid" title="<?=$item["position"];?>" style="cursor:help"><small class="w-100 text-truncate"><?=$item["position"];?></small></p>
                                    <p class="m-0"><?=Html::mailto($item["email"], null, ['class' => 'text-secondary']);?></p>
<p class="m-0"><?php // Html::tel(PhoneNumberFormatter::standert($item["phone"]), $item["phone"], ['class' => 'text-secondary']);?></p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            <?php } ?>
            <pre><?php // var_dump($content['content']['management']);?></pre>
        </div>
    </div>
</section>
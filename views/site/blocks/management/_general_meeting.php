<?php
    use common\helpers\Html;
?>
<div class="row">
    <div class="col-12 py-5">
        <?=Html::tag('h1', Yii::t('app', 'council_of_the_ansu'), ['class' => 'text-center mb-5']);?>
        <?php foreach($content['content']['list'] as $group) { ?>
            <div class="col-12 col-md-8 offset-md-2 bs-primary p-3 rounded-3 mb-5 vstack gap-3">
                <?=Html::tag('h4', $group['section'], ['class' => 'text-center fw-bold pt-2']);?>
                <?php foreach ($group['profiles'] as $p) { $name = $p['lastname'].' '.$p['firstname'].' '.$p['middlename'];?>
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-3">
                                <img 
                                    src="<?=$p["image"];?>" 
                                    alt="<?=$name;?>" 
                                    class="avatar" 
                                />
                                <div class="mt-2">
                                    <?=Html::tag('strong', $name, ['class' => 'h5 fw-bold']);?>
                                    <p class="mb-1 d-grid" title="<?=$p["position"];?>">
                                        <?=Html::tag('small', $p["position"], ['class' => 'w-100']);?>
                                    </p>
                                    <?=Html::tag('h6', Html::tag('span', $p['location']['namecity'], ['class' => 'badge rounded-pill text-primary bs-primary']));?>
                                    <?php // $this->render('_contacts', ['p' => $p]);?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>                        
    </div>
</div>  
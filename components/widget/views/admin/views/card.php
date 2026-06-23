<?php
    use yii\helpers\Html;
    use frontend\services\text\Str;
    use frontend\components\icons\Icons;
    /** @var string $title */ 
    /** @var string $icon */ 
    /** @var string $href */ 
    $word = explode(" ", $title);
    $header = Str::declension($count, $word[0], $word[1], $word[2]);
?>
<div class="col-12 col-md-3">
    <div class="card border-0 shadow-sm">
        <div class="card-body ps-4">
            <div class="d-flex justify-content-between">
                <?=Html::tag('h1', $count, ['class' => 'fw-bold display-2']);?>
                <span class="text-black-50"><?=Icons::arrowUpRight(50);?></span>                
            </div>
            <?=Html::tag('h6', $icon.$header, ['class' => 'd-flex align-items-center gap-2 text-secondary']);?>
            <?= Html::a('', $href, ['class' => 'stretched-link']);?>
        </div>
    </div>
</div>
<?php
    use yii\helpers\Html;
    $arrowHtml = $arrow == true ? 
        Html::tag('div', '', ['class' => 'swiper-button-prev']).
        Html::tag('div', '', ['class' => 'swiper-button-next']) : '';

    $scrollbarHtml = $scrollbar == true ? 
        Html::tag('div', '', ['class' => 'swiper-scrollbar']) : '';

    $paginationHtml = $pagination == true ? 
        Html::tag('div', '', ['class' => 'swiper-pagination']) : '';
?>
<div class="">
    <div class="swiper <?=$id;?>" >
        <?=Html::tag('div', $content, ['class' => 'swiper-wrapper']);?>
        <?=$paginationHtml;?>
        <?=$arrowHtml;?>
        <?=$scrollbarHtml;?>
    </div>    
</div>

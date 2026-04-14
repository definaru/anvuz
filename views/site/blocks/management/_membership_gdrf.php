<?php
    use common\helpers\Html;
    use yii\helpers\Markdown;
    $filePathgosduma = Yii::getAlias('@frontend/web/data/management/gosduma.md');
    $gosduma = file_get_contents($filePathgosduma);
?>
<div class="row">
    <div class="col-12 col-md-8 offset-md-2 py-5">
        <div class="text-center">
            <?=Html::tag('h1', Yii::t('app', 'composition'));?>
            <?=Html::tag('h4', Yii::t('app', 'composition_text_gdrf'));?>
        </div>
    </div>
    <div id="ui-table" class="gosduma col-12 py-5 mb-5 bg-white">                      
        <?=Markdown::process($gosduma, 'gfm');?>
    </div>
</div>
<?php
    use common\helpers\Html;
    use yii\helpers\Markdown;
    $filePathminobrnauky = Yii::getAlias('@frontend/web/data/management/minobrnauky.md');
    $file = file_get_contents($filePathminobrnauky);
?>
<div class="row">
    <div id="ui-table" class="col-12 py-5 col-md-8 offset-md-2">
        <div class="text-center">
            <?=Html::tag('h1', Yii::t('app', 'composition'));?>
            <?=Html::tag('h4', Yii::t('app', 'composition_text_monrf'));?>
        </div>
    </div>
    <div class="col-12 bg-white">
        <div id="ui-table" class="minobrnauky col-12 py-5 mb-5">                 
            <?=Markdown::process($file, 'gfm');?>
        </div>                        
    </div>
</div>
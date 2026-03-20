<?php
    use yii\helpers\Markdown;
    $filePath = Yii::getAlias('@frontend/web/data/about/'.$file.'.md');
    $file = file_get_contents($filePath);
?>
<div class="col-12 col-md-8 offset-md-2 mb-5">
    <?=Markdown::process($file, 'gfm');?>    
</div>
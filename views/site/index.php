<?php
    $this->title = $content['seo']['title'];
?>
<?php foreach($content['seo']['meta'] as $tag) { ?>
    <?php $this->registerMetaTag($tag);?>
<?php } ?>
<?php foreach($content['blocks'] as $item) { ?>
    <?=$this->render('blocks/index/'.$item, ['content' => $content]);?>
<?php } ?>
<?php
    $this->title = $content['seo']['title'];
    //$this->params['breadcrumbs'][] = 'Наука';
    $this->blocks['menu'] = 'bg-white';
    $this->blocks['bg'] = 'bs-white';
?>
<?php foreach($content['seo']['meta'] as $tag) { ?>
    <?php $this->registerMetaTag($tag);?>
<?php } ?>
<?php foreach($content['blocks'] as $item) { ?>
    <?=$this->render('blocks/science/'.$item, ['content' => $content, 'file' => $file]);?>
<?php } ?>
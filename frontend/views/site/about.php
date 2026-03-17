<?php
    $this->title = $content['seo']['title'];
    //$this->params['breadcrumbs'][] = 'Об ассоциации АНВУЗ России';
    $this->blocks['menu'] = 'bg-white';
?>
<?php foreach($content['seo']['meta'] as $tag) { ?>
    <?php $this->registerMetaTag($tag);?>
<?php } ?>
<?php foreach($content['blocks'] as $item) { ?>
    <?=$this->render('blocks/about/'.$item, ['href' => $href]);?>
<?php } ?>
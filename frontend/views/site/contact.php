<?php
    $this->title = $content['seo']['title'];
    $this->params['breadcrumbs'][] = $this->title;
    $this->blocks['menu'] = 'bg-white';
?>
<?php foreach($content['seo']['meta'] as $tag) { ?>
    <?php $this->registerMetaTag($tag);?>
<?php } ?>
<?php foreach($content['blocks'] as $item) { ?>
    <?=$this->render('blocks/contact/'.$item, ['model' => $model, 'content' => $content]);?>
<?php } ?>
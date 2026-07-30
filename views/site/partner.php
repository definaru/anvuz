<?php
    /** @var array $content */
    /** @var frontend\models\PagesSearch $searchModel */
    /** @var yii\data\ActiveDataProvider $dataProvider */
    $this->title = $content['seo']['title'];
    $this->params['breadcrumbs'][] = 'Каталог участников';
    $this->blocks['menu'] = 'bg-white';
    $this->blocks['bg'] = 'bs-primary';
?>
<?php foreach($content['seo']['meta'] as $tag) { ?>
    <?php $this->registerMetaTag($tag);?>
<?php } ?>
<?php foreach($content['blocks'] as $item) { ?>
    <?=$this->render('blocks/partner/'.$item, [
        'content' => $content, 
        'searchModel' => $searchModel, 
        'dataProvider' => $dataProvider
    ]);?>
<?php } ?>
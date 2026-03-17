<?php
    use yii\helpers\Html;

    $this->title = 'Мероприятия';
    $this->params['breadcrumbs'][] = $this->title;
    $this->blocks['menu'] = 'bg-white';

    // $filePath = Yii::getAlias('@frontend/web/data/document/'.$href.'.md');
    // $file = file_get_contents($filePath);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-start py-5">
                <?=Html::tag('h2', $this->title, ['class' => 'fw-bold m-0']);?>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mb-5">
                <?php // Markdown::process($file, 'gfm');?>
                ...
            </div>
        </div>
    </div>
</section>
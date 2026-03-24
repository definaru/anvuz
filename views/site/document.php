<?php
    use yii\helpers\Html;
    use yii\helpers\Markdown;

    $this->title = $model->title;
    $this->params['breadcrumbs'][] = ['label' => 'Документы', 'url' => '/documents'];
    $this->params['breadcrumbs'][] = $this->title;
    $this->blocks['menu'] = 'bg-white';

    $this->registerCss(<<<CSS
        #document img {
            width: 100%;
            border: 1px solid #888;
        }
    CSS);

    $filePath = Yii::getAlias('@frontend/web/data/document/'.$model->href.'.md');
    $file = file_get_contents($filePath);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-start py-3">
                <?=Html::tag('h2', $model->title, ['class' => 'fw-bold m-0']);?>
            </div>
        </div>
    </div>
</section>
<section id="document" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mb-5">
                <?=Markdown::process($file, 'gfm');?>
            </div>
        </div>
    </div>
</section>
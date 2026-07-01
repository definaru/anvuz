<?php
    use yii\helpers\Html;
    use yii\base\ViewNotFoundException;
    use yii\helpers\Markdown;
    /** @var frontend\models\News $model */
    //$this->header = 'Список новостей';

    $folder = $model->body == '' ? $model->id : $model->body;
    $this->title = 'Просмотр записи';
    $this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => '/admin/news/list'];
    $this->params['breadcrumbs'][] = $this->title;
    $this->registerCss('
        #news img {
            width: 100%;
            border: 1px solid #ddd;
        }
    ');
?>
<div class="row">
    <div class="col-12 col-md-7">
        <div class="card border-0 shadow-sm p-3">
            <div class="vstack gap-3">
                <?=Html::tag('h1', $model->title, ['class' => 'fw-bold']);?>
                <?=Html::tag('h4', $model->subtitle, ['class' => 'text-secondary']);?>
                <?=Html::img($model->image, ['class' => 'w-100 rounded', 'alt' => $model->title]);?>
                <div id="news">
                    <?php 
                        try {
                            $filePath = Yii::getAlias('@frontend/web/data/news/'.$folder.'.md');
                            $file = file_get_contents($filePath);                    
                            echo Markdown::process($file, 'gfm');
                        } catch (ViewNotFoundException $e) {
                            echo Html::tag('code', 'The file does not exist', ['class' => 'mb-5']);
                        }
                    ?>                     
                </div>
                <?=Html::tag('small', 'Дата публикации: '.$model->create_date, ['class' => 'text-secondary']);?>
                <hr class="m-0" />
                <div class="d-flex gap-2">
                    <?=Html::a(
                        'Открыть на сайте', 
                        '/news/'.$model->href, 
                        [
                            'class' => 'btn btn-primary btn-lg px-4', 
                            'target' => '_blank'
                        ]
                    );?>
                    <?=Html::a(
                        'Редактировать', 
                        ['news/update', 'id' => $model->id],
                        ['class' => 'btn btn-dark btn-lg px-4']
                    );?>
                </div>
            </div>             
        </div>
    </div>
</div>
<pre><?php // var_dump($folder); ?></pre>
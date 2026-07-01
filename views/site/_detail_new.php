<?php
    use yii\bootstrap5\Html;
    use yii\base\ViewNotFoundException;
    use yii\helpers\Markdown;
    use frontend\components\ui\EditMode;

    /** @var frontend\models\News $new */
    $folder = $new->body == '' ? $new->id : $new->body;
    $this->registerCss('
        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            margin-top: 1.5em;
        }
        em {
            color: #411fab;
        }
        .news img {
            border-radius: 4px;
            border: 1px solid #ddd;
        }
    ');
?>
<div class="mb-5">
    <div class="col-12 mb-5">
        <div class="border border-dark-subtle rounded-4 p-4">
            <div class="col-12 col-md-8 offset-md-2 my-5 py-5">
                <p class="text-uppercase text-muted">
                    <?=\Yii::$app->formatter->asRelativeTime($new->create_date)?>
                </p>   
                <?=Html::tag('h1', $new->title, ['class' => 'my-4']);?>
                <p class="lead pt-2"><?=$new->subtitle;?></p>
                <div class="row">
                    <div class="col-12 mt-3 mb-4"><hr /></div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-12 col-md-3">
                        <div style="position: sticky;top: 111px">
                            <h4>
                                <span class="badge text-bg-secondary px-3">
                                    <?=\Yii::$app->formatter->asDateTime($new->create_date, 'php: j F, Y');?>
                                </span>
                            </h4>
                            <?=EditMode::button('/admin/news/update?id='.$new->id);?>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 news">
                        <figure class="mb-4">
                            <img src="<?=$new->image;?>" class="rounded-4 w-100" alt="<?=$new->title;?>" />
                        </figure>
                        <?php 
                            try {
                                $filePath = \Yii::getAlias('@frontend/web/data/news/'.$folder.'.md');
                                $file = file_get_contents($filePath);                    
                                echo Markdown::process($file, 'gfm');
                            } catch (ViewNotFoundException $e) {
                                echo Html::tag('code', 'The file does not exist', ['class' => 'mb-5']);
                            }
                        ?> 
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>

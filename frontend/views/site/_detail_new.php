<?php
    use yii\bootstrap5\Html;
    use yii\base\ViewNotFoundException;
    use yii\helpers\Markdown;
?>
<div class="mb-5">
    <div class="col-12 mb-5">
        <div class="border border-dark-subtle rounded-4 p-4">
            <div class="col-12 col-md-8 offset-md-2 my-5 py-5">
                <p class="text-uppercase text-muted">
                    <?=Yii::$app->formatter->asRelativeTime($new->create_date)?> (<?=$new->id;?>)
                </p>   
                <?=Html::tag('h1', $new->title, ['class' => 'my-4']);?>
                <p class="lead pt-2"><?=$new->subtitle;?></p>
                <div class="row">
                    <div class="col-12 mt-3 mb-4"><hr /></div>
                </div>
                <div class="row g-0 mb-5">
                    <div class="col-12 col-md-3">
                        <h4>
                            <span class="badge text-bg-secondary px-3">
                                <?=Yii::$app->formatter->asDateTime($new->create_date, 'php: j F, Y');?>
                            </span>
                        </h4>
                    </div>
                    <div class="col-12 col-md-9 news">
                        <figure class="mb-4">
                            <img src="<?=$new->image;?>" class="rounded-4 w-100" alt="<?=$new->title;?>" />
                            <!-- <figcaption class="text-secondary">Подпись к картинке</figcaption> -->
                        </figure>
                        <?php 
                            try {
                                $filePath = Yii::getAlias('@frontend/web/data/news/'.$new->id.'.md');
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

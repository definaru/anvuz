<?php
    use yii\helpers\Html;
    $datetime = Yii::$app->formatter->asDateTime($model->create_date, 'php: j F, Y')
?>  
<div class="card border-0 h-100">
    <div class="card-header border-0 pb-0">
        <div class="position-relative pt-2">
            <div class="position-absolute top-0 start-0 p-3">
                <?php /*<span class="badge text-bg-dark">Новости партнёров</span>*/ ?>
            </div>
            <a href="/news/<?=$model->href;?>">
                <div class="rounded-2 overflow-hidden" style="height: 250px;">
                    <img 
                        class="object-fit-cover w-100 h-100" 
                        style="object-position: left"
                        src="<?=$model->image;?>" 
                        alt="<?=$model->title;?>" 
                    />
                </div>
            </a>
        </div>
    </div>
    <div class="card-body mb-2">
        <small class="d-block mb-2 text-primary fw-semibold">
            <?=$datetime;?>
        </small>
        <a class="text-decoration-none text-dark" href="/news/<?=$model->href;?>">
            <?=Html::tag('h4', $model->title, ['class' => 'fw-bold m-0 line-clamp-3']);?>
        </a>
    </div>
</div>

<?php
    use yii\bootstrap5\Html;
    use frontend\components\icons\Icons;

    $city = $model->profile->location->namecity;
    $logotype = isset($model->logotype) ? $model->logotype : '';
    $photo = isset($model->photo) ? 
        Html::img($model->photo, ['class' => 'w-100 h-100 object-fit-cover rounded-3', 'style' => 'object-position: bottom']) : 
        Html::tag('div', 'Нет фотографии', ['class' => 'd-flex align-items-center justify-content-center']);

    $logo = $logotype !== '' ? Html::img($model->logotype, ['class' => 'w-25', 'style' => 'filter: invert(50%)']) : '.';
?>
<div class="row g-3">
    <div class="col-12 col-md-4">
        <div class="ratio ratio-16x9 bg-secondary-subtle rounded-3">
            <?=$photo;?>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="bg-white rounded-3 p-3 h-100">
            <div class="vstack h-100">
                <div class="mb-auto">
                    <?=Html::tag('p', $city, ['class' => 'text-secondary m-0']);?>
                    <?=Html::tag('h3', $model->title);?>
                </div>
                <div>
                    <span class="badge rounded-pill text-primary bg-primary-subtle">
                        &#10004; партнёр АНВУЗ
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="bg-white rounded-3 p-3 h-100">
            <div class="vstack h-100">
                <div class="mb-auto">
                    <?=$logo;?>                 
                </div>
                <a href="/university/<?=$model->href;?>" class="btn btn-dark btn-lg">
                    <?=Icons::arrowRight();?> Подробнее
                </a>
            </div>            
        </div>
    </div>
</div>
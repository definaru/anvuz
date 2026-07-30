<?php
    use frontend\components\ui\EditMode;
    /** @var frontend\models\Pages $model */
    $this->title = $model->title;
    $this->params['breadcrumbs'][] = $this->title;
    $this->blocks['menu'] = 'bg-white border-bottom';
    $this->blocks['bg'] = 'bg-white';
    $this->registerCss('
        blockquote {
            background: #b1a0e82e;
            padding: 15px 13px 1px 18px;
            border-radius: 10px;
        }
    ');
?>
<div class="container pt-3 pb-5 mb-5">
    <div class="row pb-5">
        <div class="col-12 col-md-8 offset-md-2">
            <?php if($model->is_public === 0) { ?>
                <div style="height: 700px" class="mt-5 pt-5">
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading mt-0">⚠️ Внимание!</h4>
                        <p>Данная страница удалена или снята с публикации. 
                            Возможно её вернут, если редакция допустит её к публикации, 
                            вернитесь пожалуйста сюда позже.</p>
                        <hr>
                        <p class="mb-0">Приносим извинения за доставленные неудобства.</p>
                    </div>                    
                </div>
            <?php } else { ?>
                <?=EditMode::button('/admin/pages/update?id='.$model->id);?>
                <h1 class="display-2 fw-bold mb-4"><?=$model->title;?></h1>
                <?=$model->content;?>
                <?php /*
                <hr />
                <p class="text-muted">
                    Опубликовано <?=\Yii::$app->formatter->asRelativeTime($model->create_date)?>
                </p>              
                */ ?>
                <?=EditMode::button('/admin/pages/update?id='.$model->id);?>
            <?php } ?>
        </div>
    </div>
</div>
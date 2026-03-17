<?php
    use yii\helpers\Html;
    $this->title = 'Статьи';
?>
<?=Html::tag('p', 'Список статей', ['class' => 'text-secondary m-0']);?>
<?= Html::tag('h1', $this->title);?>
<div class="row g-3 py-3">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 450px">
                <p>...</p>
                <p><?=Yii::$app->request->url;?></p>
                <p><?=Yii::$app->request->absoluteUrl;?></p>
                <p><?=Yii::$app->request->pathInfo;?></p>
            </div>
        </div>  
    </div>  
</div>
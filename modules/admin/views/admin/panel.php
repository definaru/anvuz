<?php
    use yii\helpers\Html;
    use frontend\data\text\Hello;
    $this->title = 'Админ-панель';
?>
<?=Html::tag('p', 'Добро пожаловать на Admin-панель', ['class' => 'text-secondary m-0']);?>
<?=Hello::user();?>
<div class="row g-3 py-3">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 200px">...</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 200px">...</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 200px">...</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 200px">...</div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 450px">...</div>
        </div>
    </div>
</div>
<pre><?php //var_dump(Yii::$app->user->identity->profile);?></pre>
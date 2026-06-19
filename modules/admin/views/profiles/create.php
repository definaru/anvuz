<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Profiles $model */

$this->title = 'Создаём профиль';
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12 col-md-6">
        <h1><?= Html::encode($this->title) ?></h1>
        <?= $this->render('_form', ['model' => $model]);?>
    </div>
</div>
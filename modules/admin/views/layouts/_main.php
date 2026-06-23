<?php
use yii\bootstrap5\Breadcrumbs;
/** @var $this $content */
?>
<main class="p-3 bg-body-tertiary pt-5 mt-4">
    <?= Breadcrumbs::widget([
        'options' => ['class' => 'py-3 m-0'],
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?=$content;?>
</main>
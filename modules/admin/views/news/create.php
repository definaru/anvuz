<?php
    /** @var frontend\models\News $model */
    $this->title = 'Создание новости';
    $this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => '/admin/news/list'];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row g-3 pb-3">
    <div class="col-12 col-lg-7">
        <h2>Добавление новости</h2>
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <?=$this->render('_form', ['model' => $model]);?>
            </div>
        </div>
    </div>
</div>
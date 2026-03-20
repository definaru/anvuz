<?php
    $this->title = 'Создание новости';
    $this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => '/admin/news/list'];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row g-3 py-3 mt-5">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <?=$this->render('_form', ['model' => $model]);?>
            </div>
        </div>
    </div>
</div>
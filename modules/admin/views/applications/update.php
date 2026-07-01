<?php
    /** @var frontend\models\Applications $model */
    $this->title = 'Редактирование заявки';
    $this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => 'Просмотр заявки', 'url' => ['view', 'id' => $model->id]];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-12 col-md-6">
    <div class="card border-0 shadow-sm p-4">
        <?=$this->render('_form', ['model' => $model]);?>
    </div>    
</div>

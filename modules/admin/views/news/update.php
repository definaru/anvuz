<?php
    /** @var frontend\models\News $model */
    $this->title = 'Update Profiles: ' . $model->id;
    $this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
    $this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-12 col-lg-7">
        <?=$this->render('_form', ['model' => $model]);?>        
    </div>
</div>
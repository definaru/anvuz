<?php
    /** @var frontend\modules\auth\models\User $model */
    use frontend\modules\auth\models\User;
    $this->title = 'UUID: '.$model->username;
    $this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['admin/users']];
    $this->params['breadcrumbs'][] = $this->title;

    $user = User::find()->where(['id' => $model->id])->with('profile')->one();
    $profile = $user->profile ?? null;

?>
<div class="row">
    <div class="col-12 col-md-7">
        <?php if($profile === null) { ?>
            <div class="card border-0 shadow-sm p-4">
                <h1><?= $this->title;?></h1>
                <p>У данного пользователя нет профиля </p>
                <p class="m-0"><a href="#" class="btn btn-primary">Создать ?</a></p>
            </div>
        <?php } else { ?>
            <?=$this->render('_profile', ['profile' => $profile]);?>
        <?php } ?>        
    </div>
</div>
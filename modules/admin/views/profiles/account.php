<?php
    use yii\helpers\Html;
    $this->title = 'Профиль';
    $this->params['breadcrumbs'][] = $this->title;
    /** @var frontend\models\Profiles $model */

    $user = Yii::$app->user->identity;
    $profile = $user->profile ?? null;
?>
<div class="row">
    <?= Html::tag('h2', $this->title);?>
    <?php if ($profile !== null) { ?>
    <div class="col-12">
        <?= $this->render('_profile');?>
    </div>
    <?php } else { ?>
    <div class="col-12 col-md-6">
        <div class="card p-4 mt-5">
            <div class="vstack gap-3">
                <?=Html::tag('h5', 
                    'Профиль '.$user->email.' не заполнен', 
                    ['class' => 'text-dark m-0']
                );?>
                <?=Html::tag('p', 
                    'ID: '.$user->username, 
                    ['class' => 'text-secondary m-0']
                );?>
                <div class="d-flex">
                    <a href="/admin/profiles/create?username=<?=$user->username;?>" class="d-flex align-items-center btn btn-primary gap-2 px-4">
                        Создать профиль
                    </a>
                </div>
            </div>    
        </div>        
    </div>
    <?php } ?>
</div>
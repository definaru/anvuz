<?php
    use yii\helpers\Html;
    use yii\i18n\Formatter;
    use frontend\components\icons\Icons;

    $formatter = new Formatter(['locale' => 'ru']);
    /** @var frontend\modules\auth\models\User $profile */
    $user = $profile->user;
    $name = $profile->lastname.' '.$profile->firstname.' '.$profile->middlename;
    $contacts = $profile->contacts ?? null;
?>
<div class="vstack gap-2">
    <div class="card border-0 shadow-sm p-3">
        <div class="d-flex gap-3">
            <?=Html::img($profile->image, ['class' => 'rounded-2', 'alt' => $name]);?>
            <div class="vstack gap-1  justify-content-center">
                <h5 class="m-0"><?=$name;?></h5>
                <p class="m-0"><?=$profile->position;?></p>
                <div><?=Html::mailto($user->email);?></div>
                <small class="text-body-tertiary">
                    Дата создания: 
                    <?=$formatter->asRelativeTime($profile->create_date);?>
                    (<?=$formatter->format($profile->create_date, 'date');?>)
                </small>
            </div>
            <div>
                <?= Html::a(Icons::penLine(), ['profile/update', 'id' => $profile->id], ['class' => 'btn btn-primary']);?>
            </div>
        </div>            
    </div>

    <div class="card border-0 shadow-sm p-3">
        <p class="m-0"><strong>Членство:</strong> <?=$profile->section === '-' ? 'Не состоит в АНВУЗ России' : $profile->sections->name;?></p>
    </div>

    <div class="card border-0 shadow-sm p-3">
        <div class="vstack m-0">
            <strong>Контакты: (<?=$user->username;?>)</strong> 
            <hr />
            <?php if($contacts == null) { ?>
                <div>
                    <a href="#" class="btn btn-dark px-4">
                        Добавить контакты
                    </a>
                </div>
            <?php } else { ?>
                <pre><?php var_dump($profile->contacts);?></pre>
            <?php } ?>
        </div>
    </div>            
</div>
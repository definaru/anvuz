<?php
    use yii\helpers\Html;
    use frontend\components\blocks\ui\Profile;
    $profile = Yii::$app->user->identity->profile;
    $user = $profile ?? null;
    $name = $user === null ? 'Not User' : $profile->lastname.' '.$profile->firstname;
    $email = $user === null ? 'no data' : Yii::$app->user->identity->email;
?>
<li>
    <div class="dropdown-item">
        <div class="d-flex align-items-center">
            <?=Profile::avatar();?>
            <div class="flex-grow-1 ms-3">
                <?=Html::tag('h6', $name, ['class' => 'mb-0'])?>
                <?=Html::tag('p', $email, ['class' => 'm-0 text-secondary'])?>
            </div>
        </div>
    </div>
</li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="/admin/profile">Профиль</a></li>
<li><a class="dropdown-item" href="/admin/setting">Настройки</a></li>
<li><hr class="dropdown-divider"></li>
<li>
    <?=Html::a(
        'Выйти', 
        '/auth/logout', 
        [
            'class' => 'dropdown-item', 
            'data-method' => 'post'
        ]
    );?>
</li>
<?php
    use yii\helpers\Html;
    use frontend\components\blocks\ui\Profile;
    $user = Yii::$app->user->isGuest ? '' : Yii::$app->user->identity;
    $name = $user === '' ? 'Not User' : $user->profile->lastname.' '.$user->profile->firstname;
    $email = $user === '' ? 'no data' : $user->email;
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
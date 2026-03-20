<?php
    use yii\helpers\Html;
    $name = 'Test';
?>
<li class="dropdown">
    <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    ...
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <div class="dropdown-item user-block border-bottom">
            <?php // =Html::img($photo, ['class' => 'img-circle', 'alt' => $name]);?>
            <?=Html::tag('span', $name, ['class' => 'username']);?>
            <?=Html::tag('span', Yii::$app->user->identity->email, ['class' => 'description']);?>
        </div>
        <div class="dropdown-divider"></div>
        <a href="/panel/profile" class="dropdown-item">
            <?php // =Icons::Person(24, 'text-muted pr-2');?> Профиль
        </a>
        <a href="#" class="dropdown-item">
            <?php // =Icons::Settings(24, 'text-muted pr-2');?> Настройки
        </a>
        <div class="dropdown-divider"></div>
        <a href="/panel/logout" class="dropdown-item" data-method="post">
            <?php // =Icons::Logout(24, 'text-muted pr-2');?> Выйти
        </a>
    </div>
</li>
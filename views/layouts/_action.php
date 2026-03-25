<?php
    use yii\bootstrap5\Html;
    //use frontend\components\icons\Icons;
    //$panel = Html::a('Личный кабинет', '/panel/profile', ['class' => 'dropdown-item']);
    $admin = Html::a('Админ-Панель', '/admin/panel', ['class' => 'dropdown-item']);
    $logout = Html::a('Выйти', '/auth/logout', ['class' => 'dropdown-item', 'data-method' => 'post']);
?>
<div class="d-flex gap-2">
    <?php /*
    <button class="btn" :class="[theme ? 'btn-light' : 'btn-dark']" @click="toggleTheme">
        <template v-if="theme">
            <?=Icons::sun();?>
            <span class="d-none" aria-label="Светлая тема">Light</span>
        </template>
        <template v-else>
            <?=Icons::moon();?>
            <span class="d-none" aria-label="Тёмная тема">Dark</span>
        </template>
    </button>      

    <?=$this->render('_language');?>   
    <?php if (Yii::$app->user->isGuest) { ?>

    <?php } else { ?>     
        <div class="dropdown">
            <button class="btn btn-primary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=Icons::Person();?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <?php // =Html::tag('li', $panel);?>
                <?=Yii::$app->user->can('admin') ? Html::tag('li', $admin) : '';?>
                <li><hr class="dropdown-divider"></li>
                <?=Html::tag('li', $logout);?>
            </ul>
        </div>
    <?php } ?>  
  
    
    */ ?>

    <?=Html::tag(
        'div',
        Html::a('Вступить в Ассоциацию', '/auth/introduction', ['class' => 'btn btn-primary px-4 ctr']),
        ['class' => 'd-flex']
    );?>
</div>
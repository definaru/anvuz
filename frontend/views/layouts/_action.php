<?php
    use yii\bootstrap5\Html;
    use frontend\components\icons\Icons;
?>
<div class="d-flex gap-2">
    <?php if (Yii::$app->user->isGuest) { ?>
        <?=Html::tag(
            'div',
            Html::a('Войти', '/auth/signin', ['class' => 'btn btn-primary px-4']),
            ['class' => 'd-flex']
        );?>
    <?php } else { ?>
        <?=Html::beginForm('/auth/logout', 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();?>
    <?php } ?>
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
</div>

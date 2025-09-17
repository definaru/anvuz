<?php
    use yii\bootstrap5\Html;
    use yii\bootstrap5\ActiveForm;

    $subtitle = Html::a('Регистрация', '/auth/signup', ['class' => 'link']);

    $this->title = 'Вход';
    $this->blocks['subtitle'] = 'Нет учётной записи? '.$subtitle;

    $text = Html::tag('span', 'Пароль');
    $link = Html::a('Забыли пароль?', '/auth/request-password-reset', ['class' => 'fw-medium']);
    $password = Html::tag('span', $text.$link, ['class' => 'd-flex justify-content-between align-items-center']);
    $options = [
        'id' => 'login-form', 
        'class' => 'js-validate needs-validation p-3', 
        'novalidate' => true
    ];
?>
<?php $form = ActiveForm::begin(['options' => $options]);?>
    <?= $form->field($model, 'email')->textInput(
        [
            'class' => 'form-control form-control-lg', 
            'placeholder' => 'email@address.ru'
        ]
    );?>

    <?= $form->field($model, 'password')->passwordInput(
        [
            'class' => 'form-control form-control-lg', 
            'placeholder' => '********'
        ] 
    )->hint('Требуется 8+ символов и более')->label($password, ['class' => 'form-label w-100']);?>

    <?=$form->field($model, 'rememberMe')->checkbox();?>
    <div class="d-grid">
        <?=Html::submitButton('Войти', ['class' => 'btn btn-primary btn-lg']);?>
    </div>
<?php ActiveForm::end();?>

<?php /*
    <div class="my-1 mx-0" style="color:#999;">
        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
        <br>
        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
    </div>
*/ ?>
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

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="p-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= Yii::$app->session->getFlash('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>
<?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'enableAjaxValidation'   => true,
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnSubmit'       => false,
        'options' => $options
    ]);?>
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
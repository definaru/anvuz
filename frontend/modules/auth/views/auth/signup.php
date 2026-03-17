<?php
    use yii\bootstrap5\Html;
    use yii\bootstrap5\ActiveForm;

    $subtitle = Html::a('Войти', '/auth/signin', ['class' => 'link']);

    $this->title = 'Регистрация';
    $this->blocks['subtitle'] = 'Уже есть профиль? '.$subtitle;

    $options = [
        'id' => 'form-signup', 
        'class' => 'js-validate needs-validation p-3', 
        'novalidate' => true
    ];
?>
<?php $form = ActiveForm::begin(['options' => $options]); ?>

    <?= $form->field($model, 'username')->textInput([
        'class' => 'form-control form-control-lg', 
        'placeholder' => 'Имя'
    ]);?>

    <?= $form->field($model, 'email')->textInput([
        'type' => 'email',
        'class' => 'form-control form-control-lg', 
        'placeholder' => 'email@address.ru'
    ]);?>

    <?= $form->field($model, 'password')->passwordInput([
        'class' => 'form-control form-control-lg', 
        'placeholder' => '********'
    ]);?>

    <div class="d-grid mt-4">
        <?= Html::submitButton('Создать профиль', ['class' => 'btn btn-primary btn-lg']) ?>
    </div>

<?php ActiveForm::end(); ?>

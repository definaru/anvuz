<?php
    use yii\bootstrap5\Html;
    use yii\bootstrap5\ActiveForm;

    $this->title = 'Подтвердить e-mail';    
    $this->blocks['subtitle'] = 'Пожалуйста, введите свой E-mail. На него будет отправлено письмо с подтверждением.';

    $options = [
        'id' => 'resend-verification-email-form', 
        'class' => 'js-validate needs-validation p-3', 
        'novalidate' => true
    ];
?>
<?php $form = ActiveForm::begin(['options' => $options]);?>
    <?= $form->field($model, 'email')->textInput([
        'type' => 'email',
        'class' => 'form-control form-control-lg', 
        'placeholder' => 'email@address.ru'
    ]);?>
    <div class="d-grid mt-3">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg']) ?>
    </div>
<?php ActiveForm::end(); ?>
<?php
    use yii\bootstrap5\Html;
    use yii\bootstrap5\ActiveForm;

    $this->title = 'Сброс пароля';
    $this->blocks['subtitle'] = 'Пожалуйста, заполните E-mail. На него будет отправлена ​​ссылка для сброса пароля.';
    
    $options = [
        'id' => 'request-password-reset-form', 
        'class' => 'js-validate needs-validation p-3', 
        'novalidate' => true
    ];
?>
<?php $form = ActiveForm::begin(['options' => $options]); ?>

    <?= $form->field($model, 'email')->textInput([
        'type' => 'email',
        'class' => 'form-control form-control-lg', 
        'placeholder' => 'email@address.ru'
    ]);?>

    <div class="d-grid gap-2 mt-3">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg']) ?>
        <?= Html::a('Назад', Yii::$app->request->referrer, ['class' => 'btn btn-light']) ?>
    </div>

<?php ActiveForm::end(); ?>

<?php
    use yii\bootstrap5\Html;
    use yii\bootstrap5\ActiveForm;

    $this->title = 'Сброс пароля';
    $this->blocks['subtitle'] = 'Выберите новый пароль:';
    $options = [
        'id' => 'reset-password-form', 
        'class' => 'js-validate needs-validation p-3', 
        'novalidate' => true
    ];
?>
<?php $form = ActiveForm::begin(['options' => $options]);?>
    <?= $form->field($model, 'password')->passwordInput([
        'class' => 'form-control form-control-lg', 
        'placeholder' => '********'
    ]);?>
    <div class="d-grid gap-2 mt-3">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-primary btn-lg']);?>
        <?=Html::a('Назад', Yii::$app->request->referrer, ['class' => 'btn btn-light']);?>
    </div>
<?php ActiveForm::end(); ?>
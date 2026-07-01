<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /** @var yii\web\View $this */
    /** @var frontend\models\Applications $model */
    /** @var yii\widgets\ActiveForm $form */
    $label = $model->isNewRecord ? false : null;
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';  
    $this->registerCss('
        label {font-weight: 700; font-size: 14px;}
        .help-block {color: red}
    ');  
?>
<?php $form = ActiveForm::begin(['id' => 'applications', 'options' => ['class' => 'vstack gap-3']]);?>
    <?= $form->field($model, 'title')->textInput(['placeholder' => 'Название ВУЗа'])->label($label);?>
    <?= $form->field($model, 'person')->textInput(['placeholder' => 'Контактное лицо (ФИО)'])->label($label);?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail', 'type' => 'email'])->label($label);?>
    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон'])->label($label);?>
    <div>
        <?=Html::submitButton($textButton, ['class' => $colorButton]);?>
    </div>
<?php ActiveForm::end(); ?>
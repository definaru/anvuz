<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /** @var yii\web\View $this */
    /** @var frontend\models\Documents $model */
    /** @var yii\widgets\ActiveForm $form */
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';  
    $this->registerCss('
        label {font-weight: 700; font-size: 14px;}
        .help-block {color: red}
    '); 
?>
<?php $form = ActiveForm::begin(['id' => 'documents', 'options' => ['class' => 'vstack gap-3']]);?>
    <?= $form->field($model, 'title')->textInput() ?>
    <?= $form->field($model, 'body')->textInput() ?>
    <?= $form->field($model, 'href')->textInput() ?>
    <div>
        <?=Html::submitButton($textButton, ['class' => $colorButton]);?>
    </div>
<?php ActiveForm::end(); ?>
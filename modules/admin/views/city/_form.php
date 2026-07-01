<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /** @var frontend\models\City $model */
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';    
?>
<?php $form = ActiveForm::begin(['id' => 'city', 'options' => ['class' => 'vstack gap-3']]);?>
    <?=$form->field($model, 'namecity')->textInput();?>
    <?=$form->field($model, 'region')->textInput();?>
    <div class="form-group">
        <?=Html::submitButton($textButton, ['class' => $colorButton]);?>
    </div>
<?php ActiveForm::end(); ?>
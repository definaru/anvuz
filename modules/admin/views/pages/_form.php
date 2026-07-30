<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;
    /** @var yii\web\View $this */
    /** @var frontend\models\Pages $model */
    /** @var yii\widgets\ActiveForm $form */
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';
?>
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <?php $form = ActiveForm::begin(['id' => 'page-form', 'options' => ['class' => 'vstack gap-3']]);?>
            <?= $form->field($model, 'title')->textInput([
                'class' => 'form-control fs-1 fw-bold',
                'placeholder' => 'Заголовок страницы'
            ]);?>
            <?= $form->field($model, 'content')->widget(CKEditor::class,[
                'editorOptions' => [
                    'preset' => 'full', // basic, standard, full
                    'inline' => false, 
                ],
            ]);?>
            <?php // = $form->field($model, 'uuid')->textInput(['maxlength' => true]);?>
            <?= $form->field($model, 'is_public')->checkbox() ?>
            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]);?>
            <?php // = $form->field($model, 'create_date')->textInput();?>
            <?php // = $form->field($model, 'update_date')->textInput();?>
            <div class="form-group">
                <?=Html::submitButton($textButton, ['class' => $colorButton]);?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
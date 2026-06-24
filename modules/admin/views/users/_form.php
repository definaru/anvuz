<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use frontend\modules\auth\models\User;
    /** @var frontend\modules\auth\models\User $model */
    $colorButton = $model->isNewRecord ? 'btn btn-success px-5' : 'btn btn-primary px-5';
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
?>
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <?php $form = ActiveForm::begin([
            'id' => 'user',
            'options' => ['class' => 'vstack gap-3']
        ]); ?>
            <?= $form->field($model, 'password_hash')->textInput();?>
            <?= $form->field($model, 'email')->textInput();?>
            <?= $form->field($model, 'status')->dropDownList(
                User::getStatus(), 
                [
                    'prompt' => 'Выберите статус пользователя',
                    'class' => 'form-select'
                ]
            );?>
            <hr class="m-0" />
            <div class="form-group">
                <?= Html::submitButton($textButton, ['class' => $colorButton]);?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
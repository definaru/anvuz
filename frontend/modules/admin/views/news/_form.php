<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use frontend\components\widget\ToastEditor;
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';
    $category = [
        'news' => 'Новости партнёров',
        'events' => 'События',
        'university' => 'Университеты'
    ];
?>
<div class="card-body">
<?php $form = ActiveForm::begin([
    'id' => 'new-form',
    'options' => ['class' => 'vstack gap-3'],
]); ?>
    <?= $form->field($model, 'title')->textInput(['class' => 'form-control fw-bold']);?>
    <?= $form->field($model, 'subtitle')->textarea(['class' => 'form-control', 'rows' => '6']);?>
    <?= $form->field($model, 'image')->textInput(['class' => 'form-control']);?>
    <div class="row">
        <div class="col-md-6 col-12">
            <?= $form->field($model, 'category')->dropDownList($category, ['prompt' => 'Выберите категорию', 'class' => 'form-select']);?>
        </div>
    </div>
    
    <?= $form->field($model, 'body')->widget(ToastEditor::class, [
        'options' => [
            'id' => 'editor',
            'height' => 600
        ]
    ])->label(false);?>
    <?= $form->field($model, 'href')->textInput(['class' => 'form-control']);?>
    <div>
        <?=Html::submitButton($textButton, ['class' => $colorButton]);?>
    </div>
<?php ActiveForm::end(); ?>    
</div>

<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use frontend\models\City;
    use frontend\models\Hierarchy;
    
    $colorButton = $model->isNewRecord ? 'btn btn-success px-5' : 'btn btn-primary px-5';
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $list = ArrayHelper::map(City::find()->all(), 'id', 'namecity');
    $section = ArrayHelper::map(Hierarchy::find()->orderBy(['sortable' => SORT_ASC])->all(), 'id', 'name');
    $items = [
        'Обычная' => ['-' => 'Не состоит в совете АНВУЗ'],
        'Члены АНВУЗ' => $section
    ];
?>
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <?php $form = ActiveForm::begin([
            'id' => 'profile',
            'options' => [
                'enctype' => 'multipart/form-data',
                'class' => 'vstack gap-3'
            ]
        ]); ?>
            <?= $form->field($model, 'image')->fileInput(['class' => 'form-control', 'accept' => 'image/*']);?>

            <div class="row">
                <div class="col-12 col-md-4">
                    <?= $form->field($model, 'firstname')->textInput();?>
                </div>
                <div class="col-12 col-md-4">
                    <?= $form->field($model, 'lastname')->textInput();?>
                </div>
                <div class="col-12 col-md-4">
                    <?= $form->field($model, 'middlename')->textInput();?>
                </div>
            </div>
        
            <?= $form->field($model, 'position')->textInput(['maxlength' => true]);?>
            <div class="row">
                <div class="col-12 col-md-6">
                    <?= $form->field($model, 'city')->dropDownList(
                        $list, 
                        [
                            'prompt' => 'Выберите город',
                            'class' => 'form-select'
                        ]
                    );?>                
                </div>
                <div class="col-12 col-md-6">
                    <?= $form->field($model, 'section')->dropDownList(
                        $items, 
                        [
                            'prompt' => 'Выберите подразделение совета',
                            'class' => 'form-select'
                        ]
                    );?>
                </div>
            </div>
            <?php // = $form->field($model, 'uuid')->textInput() ?>
            <hr class="m-0" />
            <div class="form-group">
                <?= Html::submitButton($textButton, ['class' => $colorButton]);?>
            </div>
        <?php ActiveForm::end(); ?>        
    </div>
</div>

<pre><?php //var_dump($list);?></pre>
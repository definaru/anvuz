<?php
    use yii\web\View;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use frontend\models\City;
    use frontend\models\Hierarchy;

    /** @var frontend\models\Profiles $model */
    $label = $model->isNewRecord || empty($model->image) ? 'Фотография' : false;
    $type = $model->isNewRecord || empty($model->image) ? 'file' : 'hidden';
    $colorButton = $model->isNewRecord ? 'btn btn-success px-5' : 'btn btn-primary px-5';
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $list = ArrayHelper::map(City::find()->all(), 'id', 'namecity');
    $section = ArrayHelper::map(Hierarchy::find()->orderBy(['sortable' => SORT_ASC])->all(), 'sortable', 'name');
    $deleteImage = $model->isNewRecord || empty($model->image) ? '' : 
        Html::button('Заменить картинку', ['class' => 'btn btn-light', 'id' => 'delete']);
    $items = [
        'Обычная' => ['-' => 'Не состоит в совете АНВУЗ'],
        'Члены АНВУЗ' => $section
    ];
    $image = isset($model->image) ? 
        $model->image : 
        'https://dummyimage.com/800x800/f4f6f9/343a40&text=No picture';
    
    $js = <<<JS

    let input = document.getElementById('image-upload');
    let deleteimage = document.querySelector('#delete');

    deleteimage?.addEventListener('click', (event) => {
        if (input.type === 'hidden') {
            input.type = 'file';
            deleteimage.innerText = 'Отмена';
        } else {
            input.type = 'hidden';
            deleteimage.innerText = 'Заменить картинку';
        }
    });

    input.addEventListener('change', function() {
        let file = this.files[0];
        let reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('result').src = reader.result;
        }
        reader.readAsDataURL(file);
    });
    JS;
    $this->registerJs($js, View::POS_END);
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
            <div class="d-flex gap-3">
                <?=$model->isNewRecord ? '' : Html::img($image, [
                    'id' => 'result',
                    'style' => 'width: 150px;height: 150px;',
                    'class' => 'rounded',
                    'alt' =>'Picture' 
                ]);?>
                <div class="vstack gap-2">
                    <div class="row g-2">
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
                    <?= $form->field($model, 'image')->textInput([
                        'id' => 'image-upload', 
                        'class' => 'form-control', 
                        'accept' => 'image/*', 
                        'type' => $type
                    ])->label($label);?>
                    <div><?=$deleteImage;?></div>
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

<pre><?php // var_dump($model->getErrors());?></pre>
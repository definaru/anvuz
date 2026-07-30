<?php
    use yii\web\View;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /** @var yii\web\View $this */
    /** @var frontend\models\Slider $model */
    /** @var yii\widgets\ActiveForm $form */
    $label = $model->isNewRecord || empty($model->image) ? 'Фотография' : false;
    $type = $model->isNewRecord || empty($model->image) ? 'file' : 'hidden';
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';
    $deleteImage = $model->isNewRecord || empty($model->image) ? '' : 
        Html::button('Заменить картинку', ['class' => 'btn btn-light', 'id' => 'delete']);
    $image = isset($model->image) ? $model->image : 
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
        <?=Html::img($image, [
            'id' => 'result',
            'class' => 'rounded w-100',
            'alt' =>'Picture' 
        ]);?>
        <?php $form = ActiveForm::begin([
            'id' => 'slide-form', 
            'options' => [
                'class' => 'vstack gap-3',
                'enctype' => 'multipart/form-data'
            ]
        ]);?>
            <?= $form->field($model, 'image')->textInput([
                'id' => 'image-upload', 
                'class' => 'form-control', 
                'accept' => 'image/*', 
                'type' => $type
            ])->label($label);?>
            <div><?=$deleteImage;?></div>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'link')->textInput(['placeholder' => 'Вставте сюда любую url ссылку']) ?>
            <div class="row">
                <div class="col-md-4 col-12">
                    <?= $form->field($model, 'sort_order')->textInput(['type' => 'number', 'min' => 1]);?>
                </div>
                <div class="col-md-4 col-12">
                    <div class="d-grid align-content-center h-100 mt-2">
                        <?=$form->field($model, 'is_public')->checkbox();?>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="d-grid align-content-center h-100 mt-2">
                        <?=$form->field($model, 'target')->checkbox();?>
                    </div>
                </div>
            </div>
            <?php //= $form->field($model, 'create_date')->textInput() ?>
            <?php //= $form->field($model, 'update_date')->textInput() ?>
            <hr class="m-0" />
            <div class="form-group">
                <?=Html::submitButton($textButton, ['class' => $colorButton]);?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
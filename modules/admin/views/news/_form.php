<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use frontend\components\widget\ToastEditor;
    use frontend\models\News;

    /** @var string $folder */
    /** @var frontend\models\News $model */
    $title = ['class' => 'form-control fw-bold', 'placeholder' => 'Заголовок статьи'];
    $titleParams = $model->isNewRecord ? ['@input' => 'generateSlug', 'v-model' => 'title'] : [];

    $href = ['class' => 'form-control', 'placeholder' => 'URL адрес новости...'];
    $hrefParams = $model->isNewRecord ? ['v-model' => 'href'] : [];

    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';

    $public = ['1' => 'В опубликованное', '2' => 'В черновик'];
    $publicParams = $model->isNewRecord ? [] : ['3' => 'В архив'];

    $category = [
        '1' => 'Новости',
        '2' => 'События',
        '3' => 'Университеты'
    ];
    $file = News::getContent($model);
    $fieldCity = [
        'options' => ['class' => 'form-group has-feedback'],
        'template' => Html::tag(
            'div', 
            "{input}".Html::button('+', ['class' => 'btn btn-dark']), 
            ['class' => 'input-group']
        ) 
    ];
    $this->registerCss('
        .help-block {
            color: red;
            font-size: 16px;
        }
        .placeholder {
            background-color: transparent;
        }
    ');
?>
<div class="card-body">
    <?php $form = ActiveForm::begin(['id' => 'new-form', 'options' => ['class' => 'vstack gap-3']]);?>
        <?=$form->field($model, 'title')->textInput(array_merge($title, $titleParams));?>
        <?php if(isset($model->image)) { ?>
            <div class="position-relative test">
                <div class="position-absolute top-0 end-0">
                    <button type="button" class="btn btn-sm btn-danger" @click="removeFile">&times;</button>
                </div>
                <?= Html::img($model->image, ['class' => 'w-100', 'alt' => $model->title]);?>
            </div>
        <?php } ?>

        <div v-if="preview">
            <div class="position-relative">
                <div class="position-absolute top-0 end-0">
                    <button type="button" class="btn btn-sm btn-danger" @click="removeFile">&times;</button>
                </div>
                <img :src="preview" class="w-100" alt="Preview" />
                <p class="text-secondary mt-2" v-text="filesize"></p>
            </div>
        </div>
        <div v-else class="form-group" v-else>
            <label class="control-label" for="news-image">Обложка</label>
            <input 
                type="file" 
                @change="loadImage($event)" 
                class="form-control" 
                accept="image/*"
            />
        </div>
        
        <?= $form->field($model, 'image')->textInput([
            'v-model' => 'image', 
            'class' => 'form-control', 
            'type' => 'hidden'
        ])->label(false);?>

        <?= $form->field($model, 'subtitle')->textarea([
            'class' => 'form-control', 
            'rows' => '5', 
            'placeholder' => 'Напишите здесь краткое описание...'
        ]);?>
        
        <?=ToastEditor::widget([
            'options' => [
                'id' => 'editor',
                'height' => 600,
                'content' => $file,
                'folder' => $folder ?? $model->body
            ]
        ]);?>
        <?=$form->field($model, 'body')->textInput(['value' => $folder ?? $model->body]);?>

        <div class="row mt-4">
            <div class="col-md-6 col-12">
                <?=$form->field($model, 'is_public')->dropDownList(
                    array_merge($public, $publicParams), 
                    [
                        'prompt' => 'Выберите статус публикации', 
                        'class' => 'form-select'
                    ]
                )->label(false);?>                
            </div>
            <div class="col-md-6 col-12">
                <?=$form->field($model, 'category', $fieldCity)->dropDownList(
                    $category, 
                    [
                        'prompt' => 'Выберите категорию', 
                        'class' => 'form-select'
                    ]
                )->label(false);?>
            </div>            
        </div>

        <?=$form->field($model, 'href')->textInput(array_merge($href, $hrefParams));?>

        <div>
            <?=Html::submitButton($textButton, ['class' => $colorButton, '@click' => 'getSendForm()']);?>
        </div>
    <?php ActiveForm::end(); ?>
</div>
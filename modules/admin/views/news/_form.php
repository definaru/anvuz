<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use frontend\models\News;
    use frontend\components\widget\ToastEditor;
    $textButton = $model->isNewRecord ? 'Создать' : 'Обновить';
    $colorButton = $model->isNewRecord ? 'btn btn-primary px-4' : 'btn btn-success px-4';
    $latestRecord = News::find()->orderBy(['id' => SORT_DESC])->one();
    $csrf = Yii::$app->request->csrfToken;
    $id = $model->body;

    $category = [
        '1' => 'Новости',
        '2' => 'События',
        '3' => 'Университеты'
    ];
?>
<div class="card-body">
    <?php $form = ActiveForm::begin([
        'id' => 'new-form',
        'options' => ['class' => 'vstack gap-3'],
    ]); ?>

        <?= $form->field($model, 'title')->textInput([
            'class' => 'form-control fw-bold', 
            'placeholder' => 'Заголовок статьи',
            '@input' => 'generateSlug',
            'v-model' => 'title'
        ]);?>

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
                @change="loadImage($event, '<?=$id?>', '<?=$csrf?>')" 
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
            'rows' => '6', 
            'placeholder' => 'Напишите здесь краткое описание...'
        ]);?>

        <div class="row g-2">
            <div class="col-md-6 col-12">
                <?=$form->field($model, 'category')->dropDownList(
                    $category, 
                    [
                        'prompt' => 'Выберите категорию', 
                        'class' => 'form-select'
                    ]
                )->label(false);?>
            </div>
            <div class="col-md-6 col-12">
                <?=Html::button('+', ['class' => 'btn btn-dark']);?>
            </div>
        </div>
        
        <?=$form->field($model, 'body')->widget(ToastEditor::class, [
            'options' => [
                'id' => 'editor',
                'height' => 600
            ]
        ])->label(false);?>

        <?=$form->field($model, 'href')->textInput(['class' => 'form-control', 'v-model' => 'href']);?>

        <div>
            <button type="submit" class="<?=$colorButton;?>" @click="getSendForm('<?=$id?>')">
                <?=$textButton;?>
            </button>
            <?php // =Html::submitButton($textButton, ['class' => $colorButton, '@click' => 'getSendForm($id)']);?>
        </div>
    <?php ActiveForm::end(); ?>
</div>
<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use frontend\models\Authitem;
    
    /** @var frontend\models\AuthAssignment $model */
    $list = ArrayHelper::map(Authitem::find()->all(), 'name', 'description');
    $colorButton = $model->isNewRecord ? 'btn btn-success px-5' : 'btn btn-primary px-5';
    $textButton = $model->isNewRecord ? 'Создать' : 'Изменить';
    $this->title = 'Управление доступом';
    $this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['admin/users']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-12 col-md-7">
        <div class="card border-0 shadow-sm p-4">
            <?php $form = ActiveForm::begin(['id' => 'rbac', 'options' => ['class' => 'vstack gap-3']]);?>
                <?=Html::tag('h4', 'UUID: '.$model->user->username, ['class' => 'm-0']);?>
                <?=Html::mailto($model->user->email, null, ['target' => '_blank']);?>            
                <?=$form->field($model, 'item_name')->dropDownList(
                    $list, 
                    [
                        'prompt' => 'Выберите роль пользователя',
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
</div>

<pre><?php // var_dump($model->user)?></pre>
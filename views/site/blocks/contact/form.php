<?php
    use yii\bootstrap5\Html;
    use yii\bootstrap5\ActiveForm;
    use yii\captcha\Captcha;
?>
<section class="py-5 my-5">
    <div class="container">
        <div class="row bs-primary rounded-4">
            <div class="col-12 col-md-4">
                <div class="p-5">
                    <h4 class="mb-5">Написать нам:</h4>
                    <p>
                        Если у вас есть предложения или вопросы, 
                        пожалуйста, заполните следующую форму, чтобы связаться с нами:
                    </p>                       
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="py-5">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ф.И.О.'])->label('Ваше имя');?>
                        <?= $form->field($model, 'email')->textInput(['type' => 'email', 'placeholder' => 'yourname@yandex.ru'])->label('Электронный адрес');?>
                        <?= $form->field($model, 'body')->textarea(['placeholder' => 'Здесь ваше сообщение...', 'rows' => 3])->label('Ваше сообщение')?>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                            'template' => '<div class="d-flex gap-1">{image}{input}</div>',
                        ])->label('Проверочный код капчи');?>
                        <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-lg btn-primary px-5', 'name' => 'contact-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>                    
                </div>
            </div>
            <div class="col-12 col-md-4">
            </div>            
        </div>
    </div>
</section>
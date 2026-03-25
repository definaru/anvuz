<?php
    use yii\helpers\Html;
    $this->title = 'Заявка на вступление в ассоциацию';

    $this->registerJsFile('/app/js/vue.js', ['position' => yii\web\View::POS_END]);
    $this->registerJsFile('/auth/js/introduction.js', ['position' => yii\web\View::POS_END]);
    $this->registerCss(<<<CSS
        :root {
            --placeholder-color: #adb5bd;
        }
        .form-control::placeholder {
            color: var(--placeholder-color);
            opacity: 1;
        }
        .form-control::-webkit-input-placeholder {
            color: var(--placeholder-color);
        }
        .form-control::-moz-placeholder {
            color: var(--placeholder-color);
            opacity: 1;
        }
        .display-6 {
            font-size: 1.5em;
        }
        .form-text {font-size: 12px;}
        CSS
    );
    $label = 'form-label m-0';
    $input = 'form-control bg-light';
?>
<div id="introduction">
    <template v-if="isSuccess !== ''">
        <div class="alert text-center" role="alert">
            <h5>Здравствуйте, {{ isSuccess.data.person }}.</h5>
            <p>
                <span class="badge text-bg-success fs-5">Ваша заявка успешно отправлена!</span>
                <br />
                <br />
                Проверьте ваш электронный ящик: <strong>{{ isSuccess.data.email }}</strong>.<br />
                На него придет письмо с подтверждением и ваши документы.<br />
            </p>
            <a href="/" class="btn btn-primary px-5">Хорошо</a>
        </div>
    </template>
     <template v-else>
        <?=Html::beginForm('/auth/introduction', 'post', [
            'class' => 'vstack gap-3 needs-validation', 
            'novalidate' => true,
            '@submit.prevent' => 'handleSubmit',
            ':class' => "{ 'was-validated': wasValidated }"
        ]);?>
            <div>
                <?= Html::label('Название ВУЗа', 'username', ['class' => $label]) ?>
                <?= Html::input('text', 'title', '', [
                    'class' => $input, 
                    'placeholder' => 'Полное название ВУЗа', 
                    'required' => true,
                    'v-model' => 'form.title'
                ]);?>
                <?= Html::tag('span', 'Напишите название ВУЗа', ['class' => 'invalid-feedback']);?>
                <?= Html::tag('span', 'Или указать аббревиатуру ВУЗа', ['class' => 'form-text text-body-tertiary']);?>
            </div>
            <div>
                <?= Html::label('Контактное лицо (ФИО)', 'person', ['class' => $label]) ?>
                <?= Html::input('text', 'person', '', [
                    'class' => $input, 
                    'placeholder' => 'Ваше полное имя', 
                    'required' => true,
                    'v-model' => 'form.person'
                ]);?>
                <?= Html::tag('span', 'Напишите пожалуйста ваше полное имя', ['class' => 'invalid-feedback']);?>
            </div>
            <div>
                <?= Html::label('E-mail', 'email', ['class' => $label]) ?>
                <?= Html::input('email', 'email', '', [
                    'class' => $input, 
                    'placeholder' => 'Ваш рабочий электронный ящик', 
                    'required' => true,
                    'v-model' => 'form.email'
                ]);?>
                <?= Html::tag('span', '{{emailError ? "Данный адрес электронной почтой не является" : "Вы забыли указать e-mail"}}', ['class' => 'invalid-feedback']);?>
                <?= Html::tag('span', 'На этот e-mail придут важные документы', ['class' => 'form-text']);?>
            </div>
            <div>
                <?= Html::label('Телефон', 'phone', ['class' => $label]) ?>
                <?= Html::input('tel', 'phone', '', [
                    'class' => $input, 
                    'placeholder' => '+74950001020',
                    'v-model' => 'form.phone'
                ]);?>
                <?= Html::tag('span', 'Номера без скобок пробелов и дефисов', ['class' => 'form-text']) ?>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" v-if="send" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    &#160;Отправляем...   
                </button>
                <template v-else>
                    <?=Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg']);?>
                </template>
            </div>
        <?=Html::endForm() ?> 
    </template>   
</div>
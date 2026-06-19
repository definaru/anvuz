<?php
    use yii\bootstrap5\Html;
    use yii\bootstrap5\ActiveForm;

    $subtitle = Html::a('Войти', '/auth/signin', ['class' => 'link']);

    $this->title = 'Регистрация';
    $this->blocks['subtitle'] = 'Уже есть профиль? '.$subtitle;

    $options = [
        'id' => 'form-signup', 
        'class' => 'js-validate needs-validation p-3', 
        'novalidate' => true
    ];
?>
<div class="px-3">
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>    
</div>


<?php $form = ActiveForm::begin(['options' => $options]); ?>
<?php /*
    <?= $form->field($model, 'username')->textInput([
        'class' => 'form-control form-control-lg', 
        'placeholder' => 'Имя'
    ]);?>
*/ ?>


    <?= $form->field($model, 'email')->textInput([
        'type' => 'email',
        'class' => 'form-control form-control-lg', 
        'placeholder' => 'email@address.ru'
    ]);?>

    <?= $form->field($model, 'password')->passwordInput([
        'class' => 'form-control form-control-lg', 
        'placeholder' => '********'
    ]);?>

    <div class="d-grid mt-4">
        <?= Html::submitButton('Создать профиль', ['class' => 'btn btn-primary btn-lg']) ?>
    </div>

<?php ActiveForm::end(); ?>

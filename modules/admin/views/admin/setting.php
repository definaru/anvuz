<?php
    use yii\helpers\Html;
    use frontend\models\Authitem;
    use yii\helpers\ArrayHelper;
    $this->title = 'Настройки';
    $this->params['breadcrumbs'][] = ['label' => 'Профиль', 'url' => '/admin/profile'];
    $this->params['breadcrumbs'][] = $this->title;

    $user = Yii::$app->user->identity;
    $auth = Yii::$app->authManager;
    $roles = array_keys($auth->getRolesByUser($user->getId()));
    $model = Authitem::find()->all();
?>

<h3 class="mb-4"><?=$this->title;?></h3>
<div class="row">

    <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm p-3">
            <h5>Смена пароля:</h5>
            <?=Html::beginForm('/admin/reset-password', 'post', []);?>
                <div class="mb-3">
                    <label for="password" class="form-label text-body-secondary">Новый пароль</label>
                    <div class="input-group">
                        <span class="input-group-text text-success bg-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </span>
                        <?=Html::passwordInput('password', null, ['class' => 'form-control border-start-0', 'placeholder' => '* * * * * * * *']);?>
                    </div>
                    <div id="password" class="form-text text-primary">
                        Смена пароля приведёт к повторной авторизации <br />(выход из админ-панели)
                    </div>
                </div>    
                <?=Html::submitButton('Сохранить пароль', ['class' => 'btn btn-dark px-5']);?>      
            <?=Html::endForm();?>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm p-3">
            <h5>Роли, права и разрешения:</h5>
            <div class="mb-3">
                <label for="rbac" class="form-label text-body-secondary">Текущая роль</label>
                <?=Html::dropDownList(
                    'rbac', 
                    $roles, 
                    ArrayHelper::map($model, 'name', 'description'), 
                    ['prompt' => 'Выберите роль', 'class' => 'form-select']
                );?>
                <div id="rbac" class="form-text text-primary">
                    Смена роли приведёт к закрытию доступа <br />(чтобы остаться, выберите "Администратор")
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-dark px-5">
                    Применить роль
                </button>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm p-3">
            <h5>Ваш логин:</h5>
            <div class="mb-3">
                <label for="email" class="form-label text-body-secondary">Электронная почта</label>
                <div class="input-group">
                    <span class="input-group-text text-success bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/>
                            <rect x="2" y="4" width="20" height="16" rx="2"/>
                        </svg>
                    </span>
                    <input type="email" class="form-control border-start-0" id="email" placeholder="Ваш e-mail" value="<?=$user->email;?>" />
                </div>
                
                <div id="rbac" class="form-text text-primary">
                    Смена логина приведёт к повторной авторизации <br />(у вас не будет деноступен вход по старому логину)
                </div>
            </div>
            <div>
                <?=Html::submitButton('Заменить', ['class' => 'btn btn-dark px-5']);?>
            </div>
        </div>
    </div>

</div>
<pre><?php //var_dump($model); ?></pre>
<?php
    use yii\helpers\Html;
    use frontend\data\text\Hello;
    use frontend\components\widget\Application;
    use frontend\components\widget\views\admin\Card;
    use frontend\modules\admin\models\AdminPanel;
    use yii\helpers\ArrayHelper;

    $analitics = AdminPanel::analitics();
    $user = Yii::$app->user->identity;
    $auth = Yii::$app->authManager;
    [$roles] = array_keys($auth->getRolesByUser($user->getId()));
    $name_role = $auth->getChildRoles($roles);
    $description = ArrayHelper::map($name_role, 'name', 'description');

    $this->title = 'Админ-панель';
?>
<?=Html::tag('p', 'Добро пожаловать на Admin-панель', ['class' => 'text-secondary m-0']);?>
<?=Hello::user();?>
<div class="row g-3 py-3">
    <?php foreach($analitics as $item) { ?>
        <?=Card::widget([
            'icon' => $item['icon'],
            'count' => $item['count'],
            'title' => $item['title'],
            'href' => $item['href']
        ]);?>
    <?php } ?>

    <div class="col-12 col-md-4">
        <?=Application::widget();?>
    </div>
    <div class="col-12 col-md-8">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 450px">
                <p class="m-0">UUID: <?= $user->username ?></p>
                <p class="m-0 fw-bold"><?=$description["admin"];?></p>
                <p class="m-0"><?=Html::mailto($user->email, null, ['target' => '_blank']);?></p>
            </div>
        </div>
    </div>
</div>

<pre><?php // var_dump( );?></pre>
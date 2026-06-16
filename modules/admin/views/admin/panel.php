<?php
    use yii\helpers\Html;
    use frontend\data\text\Hello;
    use frontend\components\widget\views\admin\Card;
    // use frontend\modules\auth\models\User; // User::find()->count()
    use frontend\models\Documents;
    use frontend\models\University;
    use frontend\models\Profiles;
    use frontend\models\News;
    use frontend\components\icons\Icons;

    $user = Yii::$app->user->identity;
    $auth = Yii::$app->authManager;
    $roles = array_keys($auth->getRolesByUser($user->getId()));

    $this->title = 'Админ-панель';
?>
<?=Html::tag('p', 'Добро пожаловать на Admin-панель', ['class' => 'text-secondary m-0']);?>
<?=Hello::user();?>
<div class="row g-3 py-3">
    <?=Card::widget([
        'icon' => Icons::landmark(20, '#0d6efd', 1),
        'count' => University::find()->count(),
        'title' => 'Университет Университета Университетов'
    ]);?>
    <?=Card::widget([
        'icon' => Icons::usersRound(20, '#0d6efd', 1),
        'count' => Profiles::find()->count(),
        'title' => 'Профиль Профиля Профилей'
    ]);?>
    <?=Card::widget([
        'icon' => Icons::fileText(20, '#0d6efd', 1),
        'count' => News::find()->count(),
        'title' => 'Новость Новости Новостей'
    ]);?>
    <?=Card::widget([
        'icon' => Icons::inbox(20, '#0d6efd', 1),        
        'count' => Documents::find()->count(),
        'title' => 'Документ Документа Документов'
    ]);?>

    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body" style="height: 450px">
                <p><?= $user->username ?></p>
                <p><?= $user->email ?></p>
                <p><?= implode(', ', $roles) ?></p>
            </div>
        </div>
    </div>
</div>
<pre><?php //var_dump(Yii::$app->user->identity->profile);?></pre>
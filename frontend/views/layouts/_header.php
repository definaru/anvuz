<?php
    use yii\bootstrap5\Nav;
    use yii\bootstrap5\NavBar;
    use frontend\components\icons\Icons;
?>
<header>
    <?php
    NavBar::begin([
        'brandLabel' => Icons::logotype(),
        'brandUrl' => Yii::$app->homeUrl,
        'brandOptions' => ['aria-label' => Yii::$app->name],
        'options' => [
            'class' => 'navbar navbar-expand-md fixed-top py-4 '.$menu,
            ':class' => '[theme ? "navbar-light" : "navbar-dark"]'
        ],
    ]);
    $menuItems = [
        [
            'label' => 'Об ассоциации', 
            'url' => ['/site/about'],
            'linkOptions' => ['class' => 'link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover fw-semibold']
        ],
        [
            'label' => 'Устав', 
            'url' => ['/site/charter'],
            'linkOptions' => ['class' => 'link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover fw-semibold']
        ],
        [
            'label' => 'Дирекция', 
            'url' => ['/site/management'],
            'linkOptions' => ['class' => 'link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover fw-semibold']
        ],
        [
            'label' => 'Документы', 
            'url' => ['/site/documents'],
            'linkOptions' => ['class' => 'link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover fw-semibold']
        ],
        [
            'label' => 'Контакты', 
            'url' => ['/site/contact'],
            'linkOptions' => ['class' => 'link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover fw-semibold']
        ]
    ];
    // if (Yii::$app->user->isGuest) {
    //     $menuItems[] = ['label' => 'Signup', 'url' => '/auth/signup'];
    // }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav mx-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    echo $this->render('_action');
    NavBar::end();
    ?>
</header>
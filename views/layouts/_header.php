<?php
    use yii\bootstrap5\Nav;
    use yii\bootstrap5\NavBar;
    use frontend\components\icons\Icons;
    $class = 'link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover fw-semibold';
?>
<header>
    <?php
    NavBar::begin([
        'brandLabel' => Icons::logotype(40),
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
            'linkOptions' => ['class' => $class]
        ],
        [
            'label' => 'Члены АНВУЗ', 
            'url' => ['/site/management'],
            'linkOptions' => ['class' => $class]
        ],        
        [
            'label' => 'Документы', 
            'url' => ['/site/documents'],
            'linkOptions' => ['class' => $class]
        ],
        [
            'label' => 'Наука', 
            'url' => ['/site/science'],
            'linkOptions' => ['class' => $class]
        ],
        [
            'label' => 'Новости', 
            'url' => ['/site/news'],
            'linkOptions' => ['class' => $class]
        ],
        [
            'label' => 'Контакты', 
            'url' => ['/site/contact'],
            'linkOptions' => ['class' => $class]
        ]
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav mx-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    echo $this->render('_action');
    NavBar::end();
    ?>
</header>
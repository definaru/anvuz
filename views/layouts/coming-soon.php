<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    $this->beginPage();
    $color = '#411FAB';
    $robots = isset($this->blocks['robots']) ? $this->blocks['robots'] : 'index, follow';
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <?php
            $this->registerMetaTag(['name' => 'theme-color', 'content' => $color]);
            $this->registerMetaTag(['name' => 'msapplication-navbutton-color', 'content' => $color]);
            $this->registerMetaTag(['name' => 'apple-mobile-web-app-status-bar-style', 'content' => $color]);    
            $this->registerMetaTag(['name' => 'author', 'content' => 'АНВУЗ России']);
            $this->registerMetaTag(['name' => 'robots', 'content' => $robots]);
            $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
        ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->registerLinkTag(['rel' => 'icon', 'href' => Url::to('/site/favicon.png', true)]);?>
        <?php $this->registerLinkTag(['rel' => 'shortcut icon', 'href' => Url::to('/site/favicon.png', true), 'type' => 'image/x-icon']);?>
        <?php $this->registerLinkTag(['rel' => 'apple-touch-icon', 'href' => Url::to('/site/favicon.png', true)]);?>
        <?php $this->registerLinkTag(['rel' => 'canonical', 'href' => Url::canonical()]);?>
        <?php $this->registerLinkTag(['rel' => 'stylesheet', 'href' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css']);?>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
            <?= $content ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
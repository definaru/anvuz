<?php
    use yii\helpers\Url;
    use frontend\assets\AppAsset;
    use yii\bootstrap5\Breadcrumbs;
    use yii\bootstrap5\Html;
    AppAsset::register($this);
    $color = '#411FAB';
    $robots = isset($this->blocks['robots']) ? $this->blocks['robots'] : 'index, follow';
    $menu = isset($this->blocks['menu']) ? $this->blocks['menu'] : 'bs-primary';
    $bg = isset($this->blocks['bg']) ? $this->blocks['bg'] : '';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language;?>" class="h-100">
    <head>
        <meta charset="<?=Yii::$app->charset;?>">
        <?php
            $this->registerMetaTag(['name' => 'theme-color', 'content' => $color]);
            $this->registerMetaTag(['name' => 'msapplication-navbutton-color', 'content' => $color]);
            $this->registerMetaTag(['name' => 'apple-mobile-web-app-status-bar-style', 'content' => $color]);    
            $this->registerMetaTag(['name' => 'author', 'content' => 'Ray Vaigmi']);
            $this->registerMetaTag(['name' => 'robots', 'content' => $robots]);
            $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
            //$this->registerMetaTag(['name' => 'yandex-verification', 'content' => '']);
        ?>
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=Html::encode($this->title);?></title>

        <?php $this->registerLinkTag(['rel' => 'icon', 'href' => Url::to('/site/favicon.png', true)]);?>
        <?php $this->registerLinkTag(['rel' => 'shortcut icon', 'href' => Url::to('/site/favicon.png', true), 'type' => 'image/x-icon']);?>
        <?php $this->registerLinkTag(['rel' => 'apple-touch-icon', 'href' => Url::to('/site/favicon.png', true)]);?>
        <?php //$this->registerLinkTag(['rel' => 'preconnect', 'href' => 'https://mc.yandex.ru']);?>
        <?php $this->registerLinkTag(['rel' => 'canonical', 'href' => Url::canonical()]);?>
        <?php $this->head() ?>
    </head>
    <body id="app" class="d-flex flex-column h-100">
        <?php $this->beginBody() ?>
            <?=$this->render('_header', ['menu' => $menu]);?>
            <main role="main" class="flex-shrink-0 <?=$bg;?>">
                <div class="container<?=Yii::$app->controller->action->id === 'index' ? '' : ' pt-5 mt-5';?>">
                    <?= Breadcrumbs::widget([
                        'options' => ['class' => Yii::$app->controller->action->id === 'index' ? '' : 'py-3 mt-2'],
                        'links' => isset($this->params['breadcrumbs']) ? 
                            $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>    
                <?=$content;?>
            </main>
            <?=$this->render('_footer');?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage();?>
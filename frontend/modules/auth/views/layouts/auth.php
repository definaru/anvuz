<?php
    use yii\helpers\Html;
    use frontend\assets\AuthAsset;
    use frontend\components\icons\Icons;

    $title = Html::encode($this->title);
    $subtitle = isset($this->blocks['subtitle']) ? $this->blocks['subtitle'] : '';
    AuthAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language;?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <?php
            $this->registerMetaTag(['name' => 'robots', 'content' => 'noindex, nofollow']);
            $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
        ?>
        <?=Html::csrfMetaTags() ?>
        <title><?=$title;?></title>
        <link rel="icon" href="/site/favicon.png" type="image/png" />
        <?php $this->head() ?>
    </head>
    <body data-bs-theme="">
    <?php $this->beginBody() ?>
        <main id="content" role="main" class="flex-grow-1">
            <div class="position-relative">
                <div class="container py-5 py-sm-7 d-grid vh-100">
                    <div class="row">
                        <div class="d-flex flex-column justify-content-center col-md-4 offset-md-4">
                            <a class="d-flex justify-content-center mb-4 logotype" href="/">
                                <?=Icons::logotype();?>
                            </a>                        
                            <div class="card card-lg mb-4 shadow">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="mb-3">
                                            <?=Html::tag('h1', $title, ['class' => 'display-6']);?>
                                            <?=Html::tag('p', $subtitle, ['class' => 'text-body-tertiary']);?>
                                        </div>
                                    </div>
                                    <?=$content;?>
                                </div>
                            </div>
                            <div class="position-relative text-center z-1">
                                <footer>
                                    <small class="text-secondary mb-4">
                                        &copy; <?=date('Y');?>, <?=Yii::$app->name;?> &middot; Все права защищены
                                    </small>                                
                                </footer>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
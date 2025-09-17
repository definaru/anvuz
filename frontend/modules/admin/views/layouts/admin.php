<?php
    use yii\helpers\Html;
    use frontend\assets\AdminAsset;
    AdminAsset::register($this);
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
        <title><?=Html::encode($this->title);?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div>
            <header></header>
            <main>
                <?=$content;?>
            </main>
            <footer>&copy; <?=date('Y');?>, <?=Yii::$app->name;?></footer>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
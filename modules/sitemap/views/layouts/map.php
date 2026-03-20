<?php
    use yii\helpers\Html;
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
        <link rel="icon" href="/site/favicon.png" type="image/png" />
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <?=$content;?>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
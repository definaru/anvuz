<?php
    // Error layout
    use yii\helpers\Html;
    use frontend\assets\ErrorAsset;
    ErrorAsset::register($this);
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
    <body class="bg-danger-subtle">
    <?php $this->beginBody() ?>
        <div class="d-block">
            <main class="d-flex flex-column vh-100">
                <?=$content;?>
                <div class="w-100 text-center py-4">&copy; <?=date('Y');?>, <?=Yii::$app->name;?></div>
            </main>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
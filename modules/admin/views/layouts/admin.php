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
        <div class="box">
            <?=$this->render('_header');?>
            <?=$this->render('_aside');?>
            <?=$this->render('_main', compact('content'));?>
            <?=$this->render('_footer');?>
        </div>
    <?php $this->endBody() ?>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
    </body>
</html>
<?php $this->endPage() ?>
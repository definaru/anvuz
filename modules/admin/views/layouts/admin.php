<?php
    use yii\helpers\Html;
    use frontend\assets\AdminAsset;
    AdminAsset::register($this);
    $isOpen = Yii::$app->session->get('sidebar_open', true);
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
        <div class="box<?=$isOpen ? ' open' : '' ?>">
            <?=$this->render('_header');?>
            <?=$this->render('_aside');?>
            <?=$this->render('_main', compact('content'));?>
            <?=$this->render('_footer');?>
        </div>
    <?php $this->endBody() ?>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        const sidebar = document.getElementById('sidebar');
        if (sidebar) {
            const toggleSidebarTooltips = () => {
                const isOpen = sidebar.classList.contains('open');
                const sidebarElements = sidebar.querySelectorAll('[data-bs-toggle="tooltip"]');
                sidebarElements.forEach(el => {
                    const tooltipInstance = bootstrap.Tooltip.getInstance(el);
                    if (tooltipInstance) {
                        if (isOpen) {
                            tooltipInstance.enable(); 
                        } else {
                            tooltipInstance.disable();
                            tooltipInstance.hide();
                        }
                    }
                });
            };
            toggleSidebarTooltips();
            const sidebarObserver = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.attributeName === 'class') {
                        toggleSidebarTooltips();
                    }
                });
            });
            sidebarObserver.observe(sidebar, { attributes: true });
        }
    </script>
    </body>
</html>
<?php $this->endPage() ?>
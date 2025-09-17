<?php
    use yii\bootstrap5\Html;
    use yii\helpers\Url;
    use frontend\services\GuestAccessService;

    $this->title = 'Карта сайта';
    $this->params['breadcrumbs'][] = $this->title;
    $urlManager = Yii::$app->urlManager;
?>
<?=Html::tag('h1', $this->title);?>

<?php foreach ($urlManager->rules as $rule) { ?>
    <?php if ($rule instanceof yii\web\UrlRule) { 
        $pattern = $rule->pattern; 
        $route = $rule->route; 
        $name = GuestAccessService::getFolderFromRoute($rule->name); 
        $url = $urlManager->createUrl($route);
        $model = GuestAccessService::extractActionsFromRegex($pattern);
        $isTrue = $model === 0 ? false : true;
    ?>
        <?php if($isTrue) { ?>
            <?php foreach ($model as $item) {  $href = $name.'/'.$item; ?>
                <pre><?php var_dump(GuestAccessService::test($route));?></pre>
                <pre><?php //var_dump(GuestAccessService::isAllow($route));?></pre>
                <p>URL: <?=Html::a(Url::to($href, true) , $href, ['target' => '_blank']);?></p>
                <p><hr /></p>
            <?php } ?>
        <?php } ?>
    <?php } ?>
<?php } ?>
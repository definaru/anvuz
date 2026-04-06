<?php
    use common\helpers\Html;
    use frontend\data\FooterData;
    use common\helpers\PhoneNumberFormatter;
    $className = 'link-primary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover';
?>
<footer class="footer mt-auto py-5 text-muted bs-primary">
    <div class="container py-5">
        <div class="row">
            <?php foreach(FooterData::menu() as $key => $item) { ?>
            <div class="col-12 <?=$key == 0 ? 'col-md-6' : 'col-md-2';?>">
                <?=FooterData::isImage($item['image'], $item['header']);?>
                <ul class="d-grid gap-2">
                    <?php foreach($item['list'] as $links) { $tag = $links['type'];?>
                    <li>
                        <?=$tag !== 'a' ? Html::tag('span', $links['icon'], ['class' => 'text-primary pe-1']) : '';?>
                        <?=$tag === 'tel' ?
                            Html::tel(PhoneNumberFormatter::standart($links["text"]), $links["link"], ['class' => $className]) : 
                            Html::$tag($links['text'], $links['link'], ['class' => $className])
                        ;?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
        <div class="row text-body-tertiary">
            <div class="col-12 text-secondary py-3"><hr /></div>
            <div class="col-12 text-center text-dark">
                <p>&copy; <?=Yii::$app->name;?> &middot; <?= date('Y') ?> &middot; Все права защищены.</p>
            </div>
            <div class="col-12 d-flex flex-md-row flex-column align-items-center justify-content-center gap-md-3 gap-1 py-4">
                <a href="/document/privacy" class="text-secondary  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Конфиденциальность и политика</a>
                <a href="/document/user_agreement" class="text-secondary  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Пользовательское соглашение</a>
                <a href="/sitemap.xml" class="text-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Карта сайта</a>
            </div>
            <div class="col-12 col-md-8 offset-md-2">
                <p class="text-center text-secondary">
                    Мы используем файлы cookie, для персонализации сервисов и повышения удобства пользования сайтом. 
                    <br />Если вы не согласны на их использование, поменяйте настройки браузера.
                </p>
            </div>
        </div>
    </div>
</footer>
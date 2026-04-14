<?php
    use common\helpers\Html;
    use frontend\data\FooterData;
    use common\helpers\PhoneNumberFormatter;
    $className = 'link-primary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover';
    $footer = 'text-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover';
    $footerLink = [
        [
            'text' => Yii::t('app', 'privacy_policy'),
            'link' => '/document/privacy'
        ],
        [
            'text' => Yii::t('app', 'user_agreement'),
            'link' => '/document/user_agreement'
        ],
        [
            'text' => Yii::t('app', 'site_map'),
            'link' => '/sitemap.xml'
        ]
    ];
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
                <p>&copy; <?=Yii::$app->name;?> &middot; <?= date('Y') ?> &middot; <?=Yii::t('app', 'all_rights_reserved');?>.</p>
            </div>
            <div class="col-12 d-flex flex-md-row flex-column align-items-center justify-content-center gap-md-3 gap-1 py-4">
                <?php foreach ($footerLink as $link) { ?>
                    <?= Html::a($link['text'], $link['link'], ['class' => $footer]);?>
                <?php } ?>
            </div>
            <div class="col-12 col-md-8 offset-md-2">
                <?=Html::tag(
                    'p', 
                    Yii::t('app', 'cookie_notice', ['br' => '<br />']), 
                    ['class' => 'text-center text-secondary']
                ); ?>
            </div>
        </div>
    </div>
</footer>
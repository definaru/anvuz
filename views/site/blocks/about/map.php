<?php
    use frontend\components\widget\Map;
?>
<section id="map" class="py-5 bg-body-tertiary">
    <div class="container">
        <div class="row">
            <?=Map::widget([
                'title' => Yii::t('app', 'select_a_region')
            ]);?>
        </div>
    </div>
</section>
<?php
    use frontend\components\widget\Map;
?>
<section id="map" class="py-5 bg-body-tertiary">
    <div class="container">
        <div class="row">
            <?=Map::widget([
                'title' => 'Выберите регион'
            ]);?>
        </div>
    </div>
</section>
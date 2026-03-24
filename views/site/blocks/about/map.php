<?php
    use frontend\components\widget\Map;
?>
<section id="map" class="py-5 bs-primary">
    <div class="container">
        <div class="row">
            <?=Map::widget([
                'title' => 'Выберите регион'
            ]);?>
        </div>
    </div>
</section>
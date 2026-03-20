<?php
    use frontend\components\widget\Map;
?>
<section class="py-5 bs-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-start py-5">
                <?=Map::widget([
                    'title' => 'Выберите регион'
                ]);?>
            </div>
        </div>
    </div>
</section>
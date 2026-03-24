<?php
    use common\helpers\Html;
    use common\helpers\PhoneNumberFormatter;
?>
<section class="py-5 bs-primary">
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <h4>Дирекция АНВУЗ России:</h4>
            </div>
            <?php foreach($content['content']['participants'] as $item) { ?>
            <div class="col-12 col-md-4">
                <?=Html::tag('h4', $item["name"]);?>
                <?=Html::tag('small', $item["position"], ['class' => 'text-secondary w-75 d-block', 'style' => 'height: 40px']);?>
                <?=Html::tag('address', $item["address"]);?>
                <p><?=Html::tel(PhoneNumberFormatter::standart($item["phone"]), $item["phone"], ['class' => 'text-secondary']);?></p>
                <p><?=Html::mailto($item["email"], null, ['class' => 'text-secondary']);?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
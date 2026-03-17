<?php
    use common\helpers\Html;
    use common\helpers\PhoneNumberFormatter;
    ['phones' => $phones, 'emails' => $emails] = PhoneNumberFormatter::splitContacts($p['contacts']);
    $style = 'text-secondary text-decoration-none';
?>
<?php if(empty($p['contacts'])) { ?>
    Контакты не указаны
<?php } else { ?>
    <a 
        data-bs-toggle="collapse" 
        href="#contacts<?=$p["id"];?>" 
        role="button"
    >
        <u>Контакты</u>
    </a>
    <div class="collapse" id="contacts<?=$p["id"];?>">
        <div class="card card-body border-0 px-0">
            <div class="row">
                <div class="vstack col-md-6 col-12">
                    <?php foreach ($phones as $p) { ?>
                        <?=Html::tel(PhoneNumberFormatter::stacionar($p["link"]), $p["link"], ['class' => $style]);?>
                    <?php } ?>
                </div>
                <div class="vstack col-md-6 col-12">
                    <?php foreach ($emails as $e) { ?>
                        <?=Html::mailto($e["link"], null, ['class' => $style]);?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
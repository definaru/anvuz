<?php
    use common\helpers\Html;
    use common\helpers\PhoneNumberFormatter;
    ['phones' => $phones, 'emails' => $emails] = PhoneNumberFormatter::splitContacts($profile->contacts);

    $this->registerCss('
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50em;
            object-fit: cover;
            flex: none;
        }
    ');
    $name = $profile->lastname.' '.$profile->firstname.' '.$profile->middlename;
    $style = 'text-secondary text-decoration-none';
?>
<div class="d-flex align-items-start gap-3 pt-3">
    <?=Html::img($profile->image, ['class' => 'avatar', 'alt' => $name]);?>
    <div>
        <?=Html::tag('strong', $name, ['class' => 'h6 fw-bold']);?>
        <p class="m-0 d-grid text-secondary">
            <small><?=$profile->position;?></small>
        </p>
    </div>
</div>
<div>
    <hr />
    <?php if(empty($profile->contacts)) { ?>
        Контакты не указаны
    <?php } else { ?>
        <div class="row">
            <div class="vstack col-md-5 col-12">
                <?php foreach ($phones as $p) { ?>
                    <?=Html::tel(PhoneNumberFormatter::stacionar($p["link"]), $p["link"], ['class' => $style]);?>
                <?php } ?>
            </div>
            <div class="vstack col-md-7 col-12">
                <?php foreach ($emails as $e) { ?>
                    <?=Html::mailto($e["link"], null, ['class' => $style]);?>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>

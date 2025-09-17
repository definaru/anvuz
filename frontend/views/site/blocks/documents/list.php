<?php
    use yii\helpers\Html;
    $this->registerCss('
    [data-bs-theme=dark] {
        .bg-white {
            --bs-white-rgb: 8, 4, 22;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
        }
    }
    ');
?>
<section class="py-5">
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8 mb-5">
                <ul class="vstack gap-5 mb-5 p-0">
                    <?php foreach($content['content']['lists'] as $item) { ?>
                        <li style="list-style-type: none" class="position-relative">
                            <div class="d-flex justify-content-between align-items-center dotten">
                                <a href="<?=$item["href"];?>" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                    <?=Html::tag('span', $item["title"], ['class' => 'text-uppercase fw-semibold bg-white position-relative z-1 pe-1']);?>
                                </a>
                                <?=Html::tag('span', 'от '.$item["date"], ['class' => 'text-secondary bg-white position-relative z-1 ps-1']);?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
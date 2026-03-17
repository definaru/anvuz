<?php
    use frontend\components\widget\Card;
    use frontend\components\icons\Icons;
    $this->registerCss('
        [data-bs-theme=dark] {
            .bg-white {
                --bs-white-rgb: 8, 4, 22;
                background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
            }
            .document a {
                --bs-primary: #fff;
                color: var(--bs-primary);
                & svg {
                    stroke: #411fab;
                }
            }
        }
        .document a {
            --bs-primary: #000;
            color: var(--bs-primary);
            &:hover {
                --bs-primary: #411fab;
                color: var(--bs-primary);
            }
            & svg {
                stroke: blue;
            }
        }
    ');
?>
<section class="pb-5 document">
    <div class="container my-5">
        <div class="row g-3 py-5">
            <?php foreach($content['content']['lists'] as $item) { ?>
                <div class="col-md-4 col-12 d-grid h-100">
                    <?=Card::widget([
                        'title' => $item["title"],
                        'action' => 'Скачать документ',
                        'icon' => Icons::Download(),
                        'href' => '/document/'.$item["href"],
                        'padding' => 'p-3',
                        'ratio' => 'ratio-16x9',
                        'tag' => 'h3'
                    ]);?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
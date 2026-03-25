<?php
    use yii\helpers\Html;
    $this->registerCss('
        [data-bs-theme=light] {
            a {
                --bs-link-color-rgb: 65, 31, 171;
            }        
        }
        [data-bs-theme=dark] {
            a {
                --bs-link-color-rgb: 255, 255, 255;
            }        
        }
    ');
    $class = isset($action) ? 
        ['class' => 'btn bg-white py-2', 'download' => true, 'data-bs-toggle' => 'tooltip', 'data-bs-title' => $action] : 
        ['class' => 'btn bg-white py-2', 'download' => true];
    $click = Html::tag($tag, $title, ['class' => 'card-title fw-bold']);
?>
<div class="ratio <?= $ratio;?>">
    <div class="card bg-body-tertiary border-0 shadow-sm h-100 <?=$padding;?>">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center py-3">
            <div></div>
            <?=$document ? Html::a($icon, $document, $class) : Html::tag('span', $icon, $class);?>
        </div>
        <?=Html::tag('div', $content, ['class' => 'card-body bg-transparent']);?>
        <div class="card-footer border-0 bg-transparent">
            <?=$href ? Html::a($click, $href, ['class' => 'text-decoration-none']) : $click;?> 
            <?=Html::tag(
                'span', 
                $subtitle, 
                ['class' => 'text-secondary']
            );?>
        </div>
    </div>
</div>

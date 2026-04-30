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
        ['class' => 'btn bg-white py-2'];
    $click = Html::tag($tag, $title, ['class' => 'card-title fw-bold']);
    $isTitle = $href ? Html::a($click, $href, ['class' => 'text-decoration-none']) : $click;
    $header = $title ? $isTitle : '';
?>
<div class="ratio <?= $ratio;?>">
    <div class="card bs-primary border-0 h-100 <?=$padding;?>">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center py-3">
            <?=$position === '' ? Html::tag('div', '') : '';?>
            <?=$document !== false ? Html::a($icon, $document, $class) : Html::tag('span', $icon, $class);?>
        </div>
        <?=$content ? Html::tag('div', $content, ['class' => 'card-body bg-transparent']) : '';?>
        <div class="card-footer border-0 bg-transparent">
            <?=$header;?> 
            <?=Html::tag(
                'span', 
                $subtitle, 
                ['class' => 'text-secondary']
            );?>
        </div>
    </div>
</div>

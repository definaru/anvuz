<?php
    use frontend\components\language\Language;
    $this->registerCss(<<<CSS
        [data-bs-theme="dark"] {
            --bs-dropdown-link-active-bg-anvus: #241064;
            --bs-dropdown-border-color-anvus: #0f0729;
            --bs-dropdown-link-active-color-anvus: #fff;
        }
        [data-bs-theme="light"] {
            --bs-dropdown-link-active-bg-anvus: #e6e2f4;
            --bs-dropdown-border-color-anvus: #ddd;
            --bs-dropdown-link-active-color-anvus: #000;
        }
        .dropdown-menu {
            --bs-dropdown-border-color: var(--bs-dropdown-border-color-anvus);
        }
        .dropdown-menu .active {
            --bs-dropdown-link-active-bg: var(--bs-dropdown-link-active-bg-anvus);
            --bs-dropdown-link-active-color: var(--bs-dropdown-link-active-color-anvus);
        }   
        CSS
    );
?>
<?=Language::switcher();?>
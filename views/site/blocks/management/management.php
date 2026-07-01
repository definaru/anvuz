<?php
    /** @var string $content */
    $this->registerCss('
        #ui-table.gosduma table thead th:nth-child(2) {
            min-width: 310px
        }
        #ui-table.minobrnauky table thead th:nth-child(2) {
            min-width: 310px
        }
        [data-bs-theme="dark"] {
            .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
                --bs-nav-pills-link-active-color: #fff;
                --bs-nav-pills-link-active-bg: #080416;            
                color: var(--bs-nav-pills-link-active-color);
                background-color: var(--bs-nav-pills-link-active-bg);
                font-weight: 900;
            }
        }
        [data-bs-theme="light"] {
            .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
                --bs-nav-pills-link-active-color: #000;
                --bs-nav-pills-link-active-bg: #fff;             
                color: var(--bs-nav-pills-link-active-color);
                background-color: var(--bs-nav-pills-link-active-bg);
                font-weight: 900;
            }
        }
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50em;
            object-fit: cover;
            flex: none;
        }
    ');
    $tabClass = 'nav-link text-decoration-none fw-bold text-dark';
    $tabList = [
        [
            'id' => 'pills-home',
            'button' => Yii::t('app', 'general_assembly_ansu'),
            'content' => '_general_meeting' 
        ],
        [
            'id' => 'pills-profile',
            'button' => Yii::t('app', 'membership_sdrf'),
            'content' => '_membership_gdrf' 
        ],
        [
            'id' => 'pills-contact',
            'button' => Yii::t('app', 'membership_mesrf'),
            'content' => '_membership_monrf' 
        ]
    ];
?>
<section class="py-5 pb-5">
    <div class="container mb-5">

        <ul class="nav nav-pills nav-justified mb-5 bs-primary p-2 rounded-3" id="pills-tab" role="tablist">
            <?php foreach($tabList as $index => $item) { 
                $active = $index === 0 ? 'active' : '';
            ?>
                <li class="nav-item" role="presentation">
                    <button 
                        role="tab" 
                        type="button" 
                        id="<?=$item['id'];?>-tab" 
                        class="<?=$tabClass.' '.$active;?>"
                        data-bs-toggle="pill" 
                        data-bs-target="#<?=$item['id'];?>" 
                        aria-controls="<?=$item['id'];?>"
                    >
                        <?=$item['button'];?>
                    </button>
                </li>
            <?php } ?>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div id="pills-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <?=$this->render('_general_meeting', ['content' => $content]);?>                
            </div>
            <div id="pills-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <?=$this->render('_membership_gdrf', ['content' => $content]);?>
            </div>
            <div id="pills-contact" class="tab-pane fade" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <?=$this->render('_membership_monrf', ['content' => $content]);?>
            </div>
        </div>
    </div>
</section>
<?php
    use frontend\data\AsideData;
    use frontend\components\icons\Icons;
    $currentUrl = \Yii::$app->request->url;
    $pach = \Yii::$app->request->pathInfo;
    $isOpen = \Yii::$app->session->get('sidebar_open', true);

    $this->registerCss('
        .aside {height: 85%}
        .aside::-webkit-scrollbar {width: 0}
        #sidebar.open label {text-align: center}
    ');
?>
<aside id="sidebar" class="border-end<?=$isOpen ? ' open' : '' ?>">
    <div class="logotype d-flex align-items-center justify-content-between px-4 py-2 border-bottom" style="height: 59px">
        <a href="/admin/panel" class="text-dark text-decoration-none">
            <div class="logo fw-bold" style="font-size: 1.1em;color:#411fab">АНВУЗ</div>
            <div class="logo-full"><strong style="font-size: 1.6em;color:#411fab">АНВУЗ</strong> России</div>
        </a>
        <div class="close-btn" onclick="toggleAside()">■</div>
    </div>
    <div class="d-grid overflow-y-auto aside">
        <?php foreach(AsideData::list() as $key => $item) { $icon = $item['icon']; ?>
            <?php if($item['list'] === 'label') { ?>
                <label for="pages" class="text-uppercase text-secondary px-4 pt-4 pb-2 fw-medium">
                    <span class="label-text"><?=$item['title'];?></span>
                </label>        
            <?php } else if($item['list'] === false) { ?>
            <div class="accordion position-relative">
                <a 
                    href="<?=$item['link'];?>" 
                    class="<?=$currentUrl === $item['link'] ? 'activelink ' : '';?>py-2 link accordion-button text-left d-flex align-items-center gap-3 text-decoration-none text-body-tertiary"
                    data-bs-toggle="tooltip" 
                    data-bs-title="<?=$item['title'];?>"
                    data-bs-placement="right"
                >
                    <?=Icons::$icon(20, 'currentColor', 1);?> 
                    <span class="title text-dark fs-6"><?=$item['title'];?></span>
                </a>                
            </div>
            <?php } else { ?>
                <div class="accordion" id="accordionFlush">
                    <div class="position-relative">
                        <h2 
                            class="m-0"
                            data-bs-toggle="tooltip" 
                            data-bs-title="<?=$item['title'];?>"
                            data-bs-placement="right"                            
                        >
                            <button 
                                type="button" 
                                class="<?=str_contains($pach, $item['link']) ? 'activelink ' : 'collapsed ';?>accordion-button py-2" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#flush-collapse<?=$key;?>" 
                                aria-expanded="false" 
                                aria-controls="flush-collapse<?=$key;?>"

                            >
                                <div class="d-flex align-items-center gap-3 text-body-tertiary">
                                    <?=Icons::$icon(20, 'currentColor', 1);?>
                                    <span class="title text-dark fs-6"><?=$item['title'];?></span>
                                </div>
                            </button>
                        </h2>
                        <div 
                            id="flush-collapse<?=$key;?>" 
                            class="accordion-collapse<?=str_contains($pach, $item['link']) ? '' : ' collapse';?>" 
                            data-bs-parent="#accordionFlush"
                        >
                            <div class="accordion-body">
                                
                                <?php foreach($item['list'] as $list) { ?>
                                    <a href="<?=$list['link'];?>" class="ms-4 text-decoration-none text-body-tertiary w-100 d-grid">
                                        <p class="<?=$currentUrl === $list['link'] ? 'text-dark' : '';?>">- <?=$list['name'];?></p>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>                    
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</aside>
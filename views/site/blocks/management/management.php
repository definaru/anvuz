<?php
    use common\helpers\Html;
    use yii\helpers\Markdown;
    $this->registerCss('
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50em;
            object-fit: cover;
            flex: none;
        }
    ');
    $filePathgosduma = Yii::getAlias('@frontend/web/data/management/gosduma.md');
    $gosduma = file_get_contents($filePathgosduma);
    $filePathminobrnauky = Yii::getAlias('@frontend/web/data/management/minobrnauky.md');
    $minobrnauky = file_get_contents($filePathminobrnauky);

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
    ');
?>
<section class="py-5 pb-5 bs-primary">
    <div class="container mb-5">
        <ul class="nav nav-pills nav-fill mb-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-decoration-none" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Общее собрание АНВУЗ
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-decoration-none" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Состав экспертного совета при ГД
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-decoration-none" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    Состав экспертного совета при МОН РФ
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div id="pills-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="row">
                    <div class="col-12 py-5 mb-5">
                        <h1 class="text-center">Совет АНВУЗ РОССИИ</h1>
                        <hr class="my-5" />
                        <?php foreach($content['content']['list'] as $group) { ?>
                            <div class="col-12 col-md-8 offset-md-2">
                                <?=Html::tag('h4', $group['section'], ['class' => 'text-center fw-bold py-2 mt-2']);?>
                                <?php foreach ($group['profiles'] as $p) { $name = $p['lastname'].' '.$p['firstname'].' '.$p['middlename'];?>
                                    <div class="card border-0 mb-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-3">
                                                <img 
                                                    src="<?=$p["image"];?>" 
                                                    alt="<?=$name;?>" 
                                                    class="avatar" 
                                                />
                                                <div class="mt-2">
                                                    <?=Html::tag('strong', $name, ['class' => 'h5 fw-bold']);?>
                                                    <p class="m-0 d-grid" title="<?=$p["position"];?>" style="cursor:help">
                                                        <small class="w-100 text-truncate">
                                                            <?=$p["position"];?>
                                                        </small>
                                                    </p>
                                                    <?=Html::tag('h6', Html::tag('span', $p['city']['namecity'], ['class' => 'badge text-bg-secondary']));?>
                                                    <?=$this->render('_contacts', ['p' => $p]);?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>                        
                    </div>
                </div>                
            </div>
            <div id="pills-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 py-5">
                        <div class="text-center">
                            <h1>Состав</h1>
                            <h4>Экспертного совета при Комитете Государственной Думы по науке и высшему образованию</h4>
                        </div>
                    </div>
                    <div id="ui-table" class="gosduma col-12 py-5 mb-5 bg-white">                      
                        <?=Markdown::process($gosduma, 'gfm');?>
                    </div>
                </div>
            </div>
            <div id="pills-contact" class="tab-pane fade" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="row">
                    <div id="ui-table" class="col-12 py-5 col-md-8 offset-md-2">
                        <div class="text-center">
                            <h1>Состав</h1>
                            <h4>Совета по вопросам деятельности частных образовательныхорганизаций высшего образования 
                                при Министерстве наукии высшего образования Российской Федерации</h4>
                        </div>
                    </div>
                    <div class="col-12 bg-white">
                        <div id="ui-table" class="minobrnauky col-12 py-5 mb-5"> 
                            <?php /* Добавить нумерацию */ ?>                     
                            <?=Markdown::process($minobrnauky, 'gfm');?>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    use yii\bootstrap5\Html;
    use frontend\components\icons\Icons;
    $href = Yii::$app->request->get('href');
    
    $label = 'Список ВУЗов';
    $this->title = $href ? $model->title : $label;
    $this->blocks['menu'] = 'bg-white border-bottom';
    empty($href) ? '' : $this->params['breadcrumbs'][] = ['label' => $label, 'url' => '/university'];
    $this->params['breadcrumbs'][] = $this->title;

    $hyperlink = $href && $model->contact ? $model->contact[0]->link : '/#';
    
?>
<?php if(empty($href)) { ?>
    <?=$this->render('_list_university', [
        'dataProvider' => $dataProvider, 
        'label' => $label
    ]);?>
<?php } else { ?>
    <section class="pb-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mb-4">
                    <?=Html::tag('h2', $this->title, ['class' => 'fw-bold m-0 display-4']);?>
                </div>
                <div class="col-12 col-md-4 text-right">
                    <div class="d-flex justify-content-end gap-2">
                        <?=Html::a(Icons::mapPin(), '/about#map', [
                            'data-bs-toggle' => 'tooltip', 
                            'data-bs-title' => 'Выбрать на карте', 
                            'class' => 'btn btn-light'
                        ]);?>
                        <?=Html::a(Icons::link(), $hyperlink, [
                            'target' => '_blank',
                            'data-bs-toggle' => 'tooltip', 
                            'data-bs-title' => 'Открыть сайт ВУЗа', 
                            'class' => 'btn btn-light'
                        ]);?>
                        <?=Html::a(Icons::send(), '/university', [
                            'data-bs-toggle' => 'tooltip', 
                            'data-bs-title' => 'Назад к списку', 
                            'class' => 'btn btn-light'
                        ]);?>
                    </div>
                </div>
                <div class="col-12 pb-3">
                    <div class="d-flex align-items-center gap-2">
                        <div class="rounded-3 bg-primary p-1">
                            <?=Html::img($model->logotype, ['style' => 'width: 30px']);?>
                        </div>
                        <div>
                            <span class="badge text-secondary bg-light d-flex align-items-center px-2">
                                <?= Icons::mapPin(18).'&#160;'.$model->profile->location->namecity;?>
                            </span>                            
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mx-0 mx-md-1">
                <div class="col-12 bg-light rounded p-3">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="ratio ratio-16x9 bg-secondary-subtle rounded-3">
                                <?=isset($model->photo) ? 
                                    Html::img($model->photo, ['class' => 'w-100 object-fit-cover rounded-3 overflow-hidden', 'style' => 'object-position: bottom']) : 
                                    Html::tag('div', 'Нет фотографии', ['class' => 'd-flex align-items-center justify-content-center']);
                                ?>
                            </div>
                        </div>                        
                        <div class="col-12 col-md-7">
                            <div class="bg-white rounded-3 p-3 h-100">
                                <div class="vstack h-100">
                                    <div class="mb-auto">
                                        <h3>Информация о ВУЗе</h3>
                                        <p>Описание отсутствует...</p>
                                    </div>
                                    <div>
                                        <span class="badge rounded-pill text-primary bg-primary-subtle"> ✔ партнёр АНВУЗ </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="bg-white rounded-3 p-3 h-100">
                                <div class="vstack h-100">
                                    <div class="mb-auto">
                                        <p class="text-secondary m-0">Контакты:</p> 
                                        <?=$this->render('blocks/university/_contactUniversity', ['profile' => $model->profile]);?>
                                    </div>
                                    <div>
                                        <hr />
                                        <div class="d-flex justify-content-between">
                                            <strong>Город:</strong>
                                            <span><?=$model->profile->location->namecity;?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
<?php } ?>
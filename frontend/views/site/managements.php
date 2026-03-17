<?php
    use yii\helpers\Html;  
    use yii\helpers\Markdown; 
    $this->blocks['menu'] = 'bg-white';
    $this->title = 'Состав';
    $subtitle = $page == 'gosduma' ? 
        'Экспертного совета при Комитете Государственной Думы по науке и высшему образованию (вопросы негосударственного сектора образования и государственно-частного партнерства в сфере образования)' : 
        'Совета по вопросам деятельности частных образовательныхорганизаций высшего образования при Министерстве наукии высшего образования Российской Федерации';
    $class = $page == 'gosduma' ? '' : 'col-md-8 offset-md-2';
    $style = $page == 'gosduma' ? 
        '#ui-table table thead th:nth-child(3) {
            min-width: 200px
        }' : 
        '#ui-table table thead th {
            width: 50%;
            text-align: center;
        }
    ';

    $this->registerCss($style);
?>
<section class="bg-primary position-relative" style="top:-5px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center py-4">
                <?=Html::tag('h2', $this->title, ['class' => 'fw-bold m-0 text-white']);?>
            </div>
        </div>
    </div>
</section>
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <?=Html::tag('h5', $subtitle, ['class' => '']);?>
            </div>
        </div>
        <div class="row">
            <div id="ui-table" class="col-12 <?=$class;?> py-5 mb-5">
                <?=Markdown::process($file, 'gfm');?>
            </div>
        </div>
    </div>
</section>
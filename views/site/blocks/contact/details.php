<?php
    use yii\helpers\Html;
?>
<section class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <?=Html::tag(
                    'h4', 
                    Yii::t('app', 'contact_information_ansu').':', 
                    ['class' => 'fw-bold']
                );?>
            </div>
            <div class="col-12 col-md-5">
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item ps-0 pt-0">
                            <?=Html::tag('p', Yii::t('app', 'non_profit_organization_ansu'));?>
                        </li>
                        <li class="list-group-item ps-0"><strong>ИНН:</strong> 7701133562</li>
                        <li class="list-group-item ps-0"><strong>КПП:</strong> 770101001</li>
                        <li class="list-group-item ps-0"><strong>ОГРН:</strong> 1037739662124</li>
                        <li class="list-group-item ps-0"><strong>Юрид. адрес:</strong> 105005, <?=Yii::t('app', 'address_moscow');?></li>
                        <li class="list-group-item ps-0"><strong>Факт. адрес:</strong> 105005, <?=Yii::t('app', 'address_moscow');?></li>
                    </ul>

                    <ul class="list-group list-group-flush mt-5">
                        <li class="list-group-item ps-0"><p>ОАО «Газпромбанк»</p></li>
                        <li class="list-group-item ps-0"><strong>Р/с:</strong> 40703810892000002931</li>
                        <li class="list-group-item ps-0"><strong>К/с:</strong> 30101810200000000823</li>
                        <li class="list-group-item ps-0"><strong>БИК:</strong> 044525823</li>
                        <li class="list-group-item ps-0"><strong>ИНН:</strong> 7744001497</li>                    
                    </ul>                     
                </div>
               
            </div>
            <div class="col-12 col-md-3">
                
            </div>
        </div>
    </div>
</section>
<?php
    use yii\bootstrap5\Html;
?>
<div class="rounded-4 p-4 bg-white">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="ratio ratio-1x1">
                <img 
                    src="<?=$model->photo;?>" 
                    class="object-fit-cover w-100 rounded-3" 
                    alt="<?=$model->title;?>" 
                />                
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="vstack justify-content-between  h-100">
                <div>
                    <img 
                        src="<?=$model->logotype;?>" 
                        style="filter: invert(50%);width:100px" 
                        alt="<?=$model->title;?>" 
                    />
                    <h2 class="fw-bold w-75"><?=$model->title;?></h2>                    
                </div>
                <div>
                    <a href="/partner/universities/<?=$model->href;?>" class="btn btn-lg btn-primary px-5">
                        Подробнее
                    </a>                    
                </div>
            </div>
        </div>
    </div>
</div>
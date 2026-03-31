<?php
    use yii\bootstrap5\Html;
    use yii\widgets\ListView;

    $news = $content['content']['news'];    
    // bg-primary
?>
<section class="py-5 bg-light news">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="fw-bold m-0 display-4">Новости АНВУЗ</h2>
                    <a href="/news" class="text-secondary">Все новости</a>
                </div>                
            </div>
        </div>
        
        <?=ListView::widget([
            'dataProvider' => $content['content']['dataProvider'],
            'itemView' => '/site/_item',
            'itemOptions' => [
                'class' => 'col-12 col-md-4'
            ],
            'options' => [
                'tag' => 'div',
                'class' => 'row g-3 mb-5 pb-2 pt-3',
                'id' => 'list-wrapper',
            ],
            'layout' => '{items}'
        ]);?>  

        <div class="row mb-5">
            <div class="col-md-4 offset-md-4 text-center">
                <a href="/news" class="btn btn-primary btn-sm">Смотреть все новости</a>
            </div>
        </div>    
    </div>    
</section>
<?php
    use yii\web\View;
    /** @var frontend\models\News $model */
    $this->title = 'Добавление новости';
    $this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => '/admin/news/list'];
    $this->params['breadcrumbs'][] = $this->title;

    $js = <<<JS

        const left = document.getElementById('left');
        const right = document.getElementById('right');  
        const toggleBtn = document.querySelector('button[onclick="expansion()"]');      
        let isOpen = true;

        function expansion() {
            isOpen = !isOpen;
            left.classList.toggle('col-lg-11', !isOpen);
            left.classList.toggle('col-lg-7', isOpen);
            right.classList.toggle('col-lg-1', !isOpen);
            right.classList.toggle('col-lg-5', isOpen);
            toggleBtn.textContent = isOpen ? 'Расширить' : 'Сжать';
        }
    JS;
    $this->registerJs($js, View::POS_END);
?>
<h2><?=$this->title;?></h2>
<div class="row">
    <div id="left" class="col-12 col-lg-7">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <?=$this->render('_form', ['model' => $model]);?>
            </div>
        </div>  
    </div>
    <div id="right" class="col-12 col-lg-5 d-flex justify-content-end">
        <div>
            <button class="btn bg-white" style="position: sticky; top: 70px" onclick="expansion()">Расширить</button>
        </div>
    </div>
</div>
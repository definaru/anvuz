<?php
    use yii\helpers\Html;
    use common\components\Icons;

    /* @var $this yii\web\View */
    /* @var $name string */
    /* @var $message string */
    /* @var $exception Exception */

    ($exception->statusCode == '404') ? $this->title = 'Ошибка 404' : ''; 
    ($exception->statusCode == '403') ? $this->title = 'Доступ запрещён' : '';
    ($exception->statusCode == '500') ? $this->title = 'Внутренняя ошибка сервера' : '';
    //$this->title = $name;
?>
<div class="container text-center h-100">
    <div class="row h-100">
        <div class="col-12 h-100 d-flex flex-column align-items-center justify-content-center">
            <div class="text-danger">
                <?= ($exception->statusCode == '404') ? Icons::ban(80) : '', 
                    ($exception->statusCode == '403') ? Icons::warning(80) : '',
                    ($exception->statusCode == '500') ? Icons::server(80) : '';?>  
                <h1 class="mt-3"><?=Html::encode($this->title);?></h1>                  
            </div>

            <div class="alert alert-danger border-0">
                <p class="m-0"><strong>Внимание!</strong> <?=nl2br(Html::encode($message));?></p>
            </div> 
            <div class="d-flex gap-2">
                <?= Html::a(
                    Icons::arrowLeft(18).' Назад', 
                    'javascript:history.back(1)', 
                    ['class' => 'btn btn-light px-4 d-flex gap-2 align-items-center']
                );?>  
                <?= Html::a('На главную', '/', ['class' => 'btn btn-dark px-4']);?>  
            </div>
        </div>
    </div>
</div>
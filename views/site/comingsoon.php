<?php
    use yii\bootstrap5\Html;
    $this->title = 'АНВУЗ России';
    $this->registerCss('
        body, html {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
    ');
?>
<section>
    <div class="container" style="height: 100vh">
        <div class="row" style="height: 100%;display: flex; align-items: center">
            <div class="col-12 text-center py-5">
                <?=Html::tag('h2', $this->title, ['class' => 'fw-bold m-0']);?>
                <p>Сайт находится в процессе обновления!</p>
                <p><a href="http://anvuz.ru.mcpre.ru">Старая версия сайта</a></p>
            </div>
        </div>
    </div>
</section>
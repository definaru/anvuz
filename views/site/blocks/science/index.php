<?php
    use yii\web\View;
    use yii\helpers\Html;
    use yii\helpers\Markdown;
    $this->registerCss('
        #ui-table table thead th:nth-child(1) {
            min-width: 60px
        }
        #ui-table table thead th:nth-child(2) {
            min-width: 200px
        }
        #ui-table table thead th:nth-child(4) {
            min-width: 440px
        }
        #ui-table table thead th:nth-child(5) {
            min-width: 200px
        }
        #ui-table table thead th:nth-child(9) {
            min-width: 100px
        }
        #ui-table table::selection {
            background: transparent;
            color: inherit;
        } 
        #ui-table table {
            margin-bottom: 0;
            font-size: 14px;
        }
        #ui-table table thead {
            position: sticky;
            z-index: 10;
            background-color: white;
            transition: top 0s linear;
        }
        nav.navbar {
            transition: box-shadow 0.2s ease;
        }
    ');
    $this->registerJs(<<<JS
        let scrollPosition = 0;
        const links = document.querySelectorAll('#ui-table a');
        links.forEach(link => {
            link.setAttribute('target', '_blank');
            link.setAttribute('rel', 'noopener noreferrer');
        });
        document.addEventListener("scroll", (event) => {
            scrollPosition = window.scrollY;
            const table = document.querySelector("#ui-table table thead");
            Object.assign(table.style, {
                top: scrollPosition-320 + "px",
                boxShadow: "0 0 1px #000"
            });
        });
        JS, 
    View::POS_END);
?>
<section class="bg-primary position-relative" style="top:-5px">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center py-4">
                <?=Html::tag('h2', Yii::t('app', 'science'), ['class' => 'fw-bold m-0 text-white']);?>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center py-3">
                <?=Html::tag('h1', Yii::t('app', 'vak_publications_list', ['br' => '<br />']));?> 
            </div>
        </div>  
    </div>       
    <div class="container-fluid">
         <div class="row">
            <div class="col-12 mb-5">
                <div id="ui-table" class="table-responsive">
                    <?=Markdown::process($file, 'gfm');?>
                </div>
            </div>
        </div>
    </div>
</section>
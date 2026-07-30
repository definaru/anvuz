<?php
    use yii\helpers\Html;
    /** @var yii\web\View $this */
    /** @var frontend\models\Pages $model */

    $this->title = $model->title;
    $this->params['breadcrumbs'][] = ['label' => 'Страницы сайта', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;

    $visible = Html::tag('span', 'Опубликовано', ['class' => 'badge rounded-pill bg-success-subtle text-success']);
    $hidden = Html::tag('span', 'Скрыто', ['class' => 'badge rounded-pill bg-secondary-subtle text-secondary']);
    $is_public = $model->is_public === 1 ? $visible : $hidden;
    $this->registerCss('
        blockquote {
            background: #b1a0e82e;
            padding: 15px 13px 1px 18px;
            border-radius: 10px;
        }
    ');
?>
<div class="col-12 col-md-9">
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h1 class="fs-1 fw-bold mb-4"><?= Html::encode($this->title) ?></h1>

            <div class="w-100">
                <?=$model->content;?>
            </div>
            <div class="py-4">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?=$is_public;?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?= Html::a(
                            'Открыть страницу', 
                            '/s/'.$model->slug, 
                            ['target' => '_blank', 'rel' => 'noopener noreferrer']
                        );?>
                    </div>
                </div>
                
            </div>
            <hr />
            <div class="d-flex gap-2">
                <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary px-4']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger px-4',
                    'data' => [
                        'confirm' => 'Вы точно хотите удалить эту страницу безвозвратно?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>        
        </div>


        <?php /*
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title',
                'slug',
                'content:ntext',
                'uuid',
                'is_public',
                'create_date',
                'update_date',
            ],
        ]) ?>    
        
        */ ?>


    </div>    
</div>


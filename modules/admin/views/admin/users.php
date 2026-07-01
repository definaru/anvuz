<?php
    use yii\helpers\Html;
    use frontend\modules\auth\models\User;
    use frontend\components\icons\Icons;
    /** @var frontend\modules\auth\models\User $model */
    $this->title = 'Пользователи';
    $this->params['breadcrumbs'][] = $this->title;
    $this->registerCss('
        table td {
            vertical-align: middle;
        }
        th:first-child, td:first-child {
            text-align: center;
        }
        .text-bg-primary {
            --bs-primary-rgb: 65, 31, 171; 
        }
        .text-primary {
            --bs-primary-rgb: 65, 31, 171;        
        }
    ');
    $status = User::getStatus();
    $color = User::getColorStatus();
    $colorRole = User::getColorRole();
?>
<div class="d-flex align-items-center gap-2">
    <?= Html::tag('h1', $this->title);?> 
    <span class="badge text-bg-primary"><?=$model->count();?></span>    
</div>

<div class="row g-3 py-3">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">

                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Статус</th>
                            <th>Роль</th>
                            <th>Дата создания</th>
                            <th>
                                <div class="d-flex justify-content-end pe-2">Управление</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($model->all() as $key => $item) { ?>
                            <tr>
                                <td>
                                    <?=$key+1;?>
                                </td>
                                <td>
                                    <strong class="text-primary">
                                        UUID: <?=$item->username;?>
                                    </strong>
                                </td>
                                <td><?=Html::mailto($item->email, null, ['target' => '_blank']);?></td>
                                <td>
                                    <?=Html::tag('span', $status[$item->status], ['class' => $color[$item->status]]);?>
                                </td>
                                <td>
                                    <?=Html::tag(
                                        'span', 
                                        $item->roleName->description, 
                                        ['class' => $colorRole[$item->roleName->name]]
                                    );?>
                                </td>
                                <td><?=Yii::$app->formatter->asDate($item->created_at, 'php: d F Y');?></td>
                                <td>
                                    <div class="d-flex gap-1 justify-content-end">
                                        <?= Html::a(
                                            Icons::usb(20), 
                                            ['users/role', 'id' => $item->id], 
                                            [
                                                'class' => 'btn btn-light',
                                                'data-bs-toggle' => 'tooltip', 
                                                'data-bs-title' => 'Изменить роль'
                                            ]
                                        );?>
                                        
                                        <?= Html::a(
                                            Icons::pencil(20), 
                                            ['users/update', 'id' => $item->id], 
                                            [
                                                'class' => 'btn btn-light',
                                                'data-bs-toggle' => 'tooltip', 
                                                'data-bs-title' => 'Редактировать'
                                            ]
                                        );?>
                                        
                                        <?= Html::a(
                                            Icons::eye(20),
                                            ['users/view', 'id' => $item->id], 
                                            [
                                                'class' => 'btn btn-light',
                                                'data-bs-toggle' => 'tooltip', 
                                                'data-bs-title' => 'Посмотреть'
                                            ]
                                        );?>

                                        <?= Html::a(
                                            Icons::trashTwo(20), 
                                            ['users/delete', 'id' => $item->id], 
                                            [
                                                'class' => 'btn btn-light text-danger', 
                                                'data-bs-toggle' => 'tooltip', 
                                                'data-bs-title' => 'Удалить ?',
                                                'data' => [
                                                    'confirm' => 'Удалить этого пользователя ?',
                                                    'method' => 'post',
                                                ],                                                
                                            ]
                                        );?>                                        
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>  
    </div>  
</div>
<pre><?php // var_dump($model->count());?></pre>
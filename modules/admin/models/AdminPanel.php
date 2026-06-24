<?php
namespace frontend\modules\admin\models;

use frontend\components\icons\Icons;
use frontend\models\Documents;
use frontend\models\University;
use frontend\models\Profiles;
use frontend\models\News;
use yii\grid\GridView;


class AdminPanel
{
    // use frontend\modules\admin\models\AdminPanel;
    // AdminPanel::analitics()
    public static function analitics()
    {
        $size = 20;
        $color = '#0d6efd';
        return [
            [
                'icon' => Icons::landmark($size, $color, 1),
                'count' => University::find()->count(),
                'title' => 'Университет Университета Университетов',
                'href' => '/admin/universities'
            ],
            [
                'icon' => Icons::usersRound($size, $color, 1),
                'count' => Profiles::find()->count(),
                'title' => 'Профиль Профиля Профилей',
                'href' => '/admin/profile/index'
            ],
            [
                'icon' => Icons::fileText($size, $color, 1),
                'count' => News::find()->count(),
                'title' => 'Новость Новости Новостей',
                'href' => '/admin/news/list'
            ],
            [
                'icon' => Icons::inbox($size, $color, 1),        
                'count' => Documents::find()->count(),
                'title' => 'Документ Документа Документов',
                'href' => '/admin/documents'
            ]
        ];
    }

    
    /** @param string $dataProvider */
    public static function pagination($dataProvider)
    {
        return GridView::widget([
            'dataProvider' => $dataProvider,  
            'showHeader' => false,
            'showOnEmpty' => false,
            'summary' => 'Страницы: {page} из {pageCount}',
            'layout' => '<div class="d-flex align-items-center justify-content-between">{pager}<span class="btn">{summary}</span></div>',
            'pager' => [
                'maxButtonCount' => 10, // максимум 10 кнопок
                'options' => ['class' => 'pagination m-0'],
                'linkOptions' => ['class' => 'page-link'],
                'pageCssClass' => ['class' => 'page-item'],
                'registerLinkTags' => false,
                'nextPageCssClass' => 'page-item next',
                'prevPageCssClass' => 'page-item prev',
                'disabledPageCssClass' => 'disabled',
                'nextPageLabel' => '<div aria-hidden="true">&raquo;</div>', // стрелочка в право
                'prevPageLabel' => '<div aria-hidden="true">&laquo;</div>', // стрелочка влево
                'disabledListItemSubTagOptions' => ['tag' => 'div', 'class' => 'page-link', 'aria-label' => 'Next']
                //'firstPageLabel' => 'Начало',
                //'lastPageLabel' => 'Конец'
            ],  
        ]);
    }
}
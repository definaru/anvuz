<?php
namespace frontend\components\ui\grid;

use yii\grid\Column;
use yii\helpers\Html;
use frontend\components\icons\Icons;
// use frontend\components\ui\grid\DragblColumn;
class DragblColumn extends Column
{
    public $header = '#';

    protected function renderDataCellContent($model, $key, $index)
    {
        return Html::tag('div', Icons::gripVertical(20, '#999'), ['class' => 'grabable']);
    }
}
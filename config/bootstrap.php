<?php
use yii\helpers\Markdown;
use frontend\components\expansion\CustomMarkdown;

Markdown::$flavors['gfm'] = [
    'class' => CustomMarkdown::class,
];
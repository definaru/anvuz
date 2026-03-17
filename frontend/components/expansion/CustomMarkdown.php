<?php
namespace frontend\components\expansion;
use cebe\markdown\GithubMarkdown;

class CustomMarkdown extends GithubMarkdown
{

    protected function renderTable($block)
    {
        $html = parent::renderTable($block);
        $html = preg_replace('/<table>/', '<table class="table table-bordered">', $html);
        return $html;
    }

}
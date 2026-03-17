<?php

namespace common\components;

use Yii;
use yii\base\BootstrapInterface;

class LanguageSelector implements BootstrapInterface
{

    public function bootstrap($app)
    {
        if (Yii::$app instanceof \yii\web\Application) {
            $cookieLanguage = Yii::$app->request->cookies->getValue('language');
            $sessionLanguage = Yii::$app->session->get('language');
            $language = $cookieLanguage ?: $sessionLanguage ?: Yii::$app->params['current_languages'];

            if (!in_array($language, Yii::$app->params['languages'])) {
                $language = Yii::$app->params['current_languages'];
            }

            Yii::$app->language = $language;

            if ($cookieLanguage) {
                Yii::$app->session->set('language', $cookieLanguage);
            }            
        }
    }

}
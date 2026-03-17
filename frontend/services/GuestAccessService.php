<?php

namespace frontend\services;

use Yii;
use yii\filters\AccessControl;
use yii\filters\AccessRule;


class GuestAccessService
{

    // if (preg_match('#^(debug|gii|admin)/#', $route)) {
    //     return false;
    // }

        // [$controller, $actionId] = Yii::$app->createController($route);
        // return [
        //     'controller' => $controller,
        //     'actionId' => $actionId,
        //     'route' => $route
        // ];

    public static function splitRoute(string $route): array
    {
        // Удаляем пустые сегменты и сбрасываем ключи
        $segments = array_values(array_filter(explode('/', trim($route, '/')), fn($s) => $s !== ''));

        if (count($segments) === 0) {
            return ['site', 'index']; // по умолчанию
        }

        if (count($segments) === 1) {
            return ['site', $segments[0]];
        }

        $actionId = array_pop($segments);
        $controllerRoute = implode('/', $segments);

        return [$controllerRoute, $actionId];
    }


    public static function test($route)
    {
        [$controllerRoute, $actionId] = self::splitRoute($route);

        [$controller] = Yii::$app->createController($controllerRoute);
        $behaviors = isset($controller) ? $controller->behaviors() : [];
        $access = (isset($behaviors['access']) || $behaviors['access'] instanceof AccessControl) ? $behaviors['access'] : [];

        return [
            'controller' => $access["rules"],
            'actionId' => $actionId,
            'route' => $route,
            'valid' => $controller !== null && method_exists($controller, 'action' . ucfirst($actionId))
        ];
    }


    // <?php foreach ($model as $item) {
    //     $href = $name . '/' . $item;
    //     $test = GuestAccessService::test($href);
    //     if (GuestAccessService::isGuestAccessible($test['controller'], $item)) {
    //         echo Html::a(Url::to($href, true), $href, ['target' => '_blank']);
    //         echo "<hr />";
    //     }
    // }

    public static function isGuestAccessible(array $rules, string $actionId): bool
    {
        foreach ($rules as $rule) {
            $actions = $rule['actions'] ?? [];
            $roles = $rule['roles'] ?? [];

            // Проверяем, доступен ли экшен для роли '?'
            if (in_array('?', $roles, true) && in_array($actionId, $actions, true)) {
                return true;
            }
        }

        return false;
    }





    public static function isAllow($route)
    {
        $route = trim($route, '/');
        $segments = explode('/', $route);

        $controllerRoute = implode('/', array_slice($segments, 0, -1));
        $actionId = end($segments);

        [$controller] = Yii::$app->createController($controllerRoute);
        if (!$controller) return false;

        $behaviors = $controller->behaviors();

        if (!isset($behaviors['access']) || !$behaviors['access'] instanceof AccessControl) {
            return true;
        }

        /** @var AccessControl $access */
        $access = $behaviors['access'];

        if (!empty($access->only)) {
            // Если экшен НЕ входит в список only — AccessControl его не трогает
            if (!in_array($actionId, $access->only)) {
                return true;
            }
        }


        foreach ($access->rules as $rule) {
            /** @var AccessRule $rule */
            if (in_array('?', $rule->roles)) {
                if (empty($rule->actions) || in_array($actionId, $rule->actions)) {
                    return true;
                }
            }
        }

        return false;
    }


    public static function extractActionsFromRegex($pattern)
    {
        if (preg_match('#\(\?P<\w+>\(([^)]+)\)\)#', $pattern, $matches)) {
            $actions = explode('|', $matches[1]);
            return $actions;
        }
        return 0;
    }


    public static function getFolderFromRoute($route) {
        $route = trim($route, '/'); // убираем слеши по краям
        $segments = explode('/', $route);

        // Если всего один сегмент — значит это уже "файл", папки нет
        if (count($segments) <= 1) {
            return '';
        }

        // Убираем последний сегмент (файл), оставляем путь
        array_pop($segments);
        return implode('/', $segments);
    }

// $action = $controller->createAction($actionId);
// $access = $controller->behaviors()['access'];
// if (!$access->beforeAction($action)) {
//     return false;
// }
// return true;


}
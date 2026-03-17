<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;


// RBAC инициализация ролей и иерархии.
class RbacController extends Controller
{

    // Используйте команду: php yii rbac/flush
    public function actionFlush()
    {
        $db = Yii::$app->db;
        $db->createCommand()->delete('auth_assignment')->execute();
        $db->createCommand()->delete('auth_item_child')->execute();
        $db->createCommand()->delete('auth_item')->execute();
        $db->createCommand()->delete('auth_rule')->execute();
        echo "RBAC таблицы очищены!\n";
    }


    // Используйте команду: php yii rbac/init
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // Удаляем все старое
        $auth->removeAll();

        // === Создаем роли ===
        $admin = $auth->createRole('admin');
        $admin->description = 'Администратор';
        $auth->add($admin);

        $moderator = $auth->createRole('moderator');
        $moderator->description = 'Модератор';
        $auth->add($moderator);

        $teacher = $auth->createRole('teacher');
        $teacher->description = 'Преподаватель';
        $auth->add($teacher);

        $student = $auth->createRole('student');
        $student->description = 'Учащийся';
        $auth->add($student);

        $user = $auth->createRole('user');
        $user->description = 'Пользователь';
        $auth->add($user);

        // === Иерархия ролей (наследование) ===
        // admin > moderator > teacher > student > user
        $auth->addChild($admin, $moderator);
        $auth->addChild($moderator, $teacher);
        $auth->addChild($teacher, $student);
        $auth->addChild($student, $user);

        // === Пример добавления разрешений (permissions) ===

        // Создаём разрешения
        
        // $createPost = $auth->createPermission('createPost');
        // $createPost->description = 'Создать пост';
        // $auth->add($createPost);

        // $updatePost = $auth->createPermission('updatePost');
        // $updatePost->description = 'Редактировать пост';
        // $auth->add($updatePost);

        echo "RBAC: Роли и иерархия успешно созданы!\n";
        // Назначаем роли пользователям по ID
        $auth->assign($admin, 1);
    }
}
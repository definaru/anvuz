<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\Json;
use frontend\models\Contacts;
use frontend\models\Profiles;


class ImportController extends Controller
{
    public function actionProfiles($file)
    {
        $path = Yii::getAlias($file);

        if (!file_exists($path)) {
            echo "Файл не найден: $path\n";
            return;
        }

        $json = file_get_contents($path);
        $data = Json::decode($json, true);

        $now = time() - 86400 * 4; // минус 4 дня

        foreach ($data as $item) {

            // -----------------------------
            // 1. Разбор ФИО
            // -----------------------------
            $parts = explode(' ', trim($item['name']));
            $lastname   = $parts[0] ?? '';
            $firstname  = $parts[1] ?? '';
            $middlename = $parts[2] ?? null;

            // -----------------------------
            // 2. Создание профиля
            // -----------------------------
            $profile = new Profiles();
            $profile->uuid        = $item['uuid'];
            $profile->firstname   = $firstname;
            $profile->lastname    = $lastname;
            $profile->middlename  = $middlename;
            $profile->image       = $item['image'] ?: null;
            $profile->position    = $item['position'];
            $profile->city        = $item['city'];
            $profile->section     = $item['section'];
            $profile->create_date = $now;

            if (!$profile->save()) {
                echo "Ошибка сохранения профиля {$item['name']}:\n";
                print_r($profile->errors);
                continue;
            }

            // -----------------------------
            // 3. Добавление контактов
            // -----------------------------
            if (!empty($item['contacts'])) {
                foreach ($item['contacts'] as $c) {

                    $contact = new Contacts();
                    $contact->uuid        = $profile->uuid; // связь по uuid
                    $contact->type        = $c['type'];
                    $contact->link        = $c['link'];
                    $contact->is_public   = $c['is_public'] ?? false;
                    $contact->create_date = $now;

                    if (!$contact->save()) {
                        echo "Ошибка сохранения контакта для {$item['name']}:\n";
                        print_r($contact->errors);
                    }
                }
            }

            echo "Импортирован: {$item['name']}\n";
        }

        echo "Готово!\n";
    }
}
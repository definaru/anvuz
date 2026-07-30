<?php
namespace frontend\data\security;

use Yii;

class Generate
{
    // use frontend\data\security\Generate;
    // Generate::uuidV7();
    public static function uuidV7(): string
    {
        $msec = (int) (microtime(true) * 1000);
        $randomBytes = Yii::$app->security->generateRandomString(10);
        $bytes = pack('J', $msec);
        $bytes = substr($bytes, 2) . $randomBytes;
        $bytes[6] = chr((ord($bytes[6]) & 0x0f) | 0x70);
        $bytes[8] = chr((ord($bytes[8]) & 0x3f) | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($bytes), 4));
    }

}
<?php
namespace frontend\services\text;

class Str
{
    public static function declension(int $n, string $s1, string $s2, string $s3, bool $b = false)
    {
        // Str::declension( 'число', 'новость', 'новости', 'новостей') 1, 2, 5
        $m = $n % 10; $j = $n % 100;
        if($b) {$n = $n;}
        if($m==0 || $m>=5 || ($j>=10 && $j<=20)) {return $s3;}
        if($m>=2 && $m<=4) {return $s2;}
        return $s1;
    }
}
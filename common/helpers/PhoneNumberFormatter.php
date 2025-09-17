<?php
namespace common\helpers;

class PhoneNumberFormatter
{
    public static function standert($number)
    {
        $formatted = preg_replace('/^8(\d{3})(\d{3})(\d{2})(\d{2})$/', '+7($1) $2-$3-$4', $number);
        return $formatted;
    }
}
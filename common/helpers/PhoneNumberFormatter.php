<?php
namespace common\helpers;

class PhoneNumberFormatter
{

    public static function standart($number)
    {
        $formatted = preg_replace('/^8(\d{3})(\d{3})(\d{2})(\d{2})$/', '+7($1) $2-$3-$4', $number);
        return $formatted;
    }

    public static function stacionar($number)
    {
        $formatted = preg_replace('/^\+7(\d{3})(\d{3})(\d{2})(\d{2})$/', '+7($1) $2-$3-$4', $number);
        return $formatted;
    }

    public static function splitContacts(array $contacts): array
    {
        $phones = [];
        $emails = [];

        foreach ($contacts as $c) {
            if (str_contains($c['type'], 'tel')) {
                $phones[] = $c;
            } elseif (str_contains($c['type'], 'mailto')) {
                $emails[] = $c;
            }
        }
        return compact('phones', 'emails');
    }

}
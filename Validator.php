<?php
class Validator
{
    public function isEmail($str)
    {
        // проверяет строку на то, что она корректный email
        if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
            return "Email адрес '$str' указан верно"; // or return true
        } else {
            return  "Email адрес '$str' указан неверно";
        }
    }

    public function isDomain($str)
    {
        // проверяет строку на то, что она корректное имя домена
        if (filter_var($str, FILTER_VALIDATE_DOMAIN)) {
            return true;
        } else {
            return "Имя домена не корректное";
        }
    }

    public function inRange($num, $from, $to)
    {
        // проверяет число на то, что оно входит в диапазон
        if ($num >= $from && $num <= $to) {
            return true;
        } else {
            return 'Число не входит в диапазон';
        }
    }

    public function inLength($str, $from, $to)
    {
        // проверяет строку на то, что ее длина входит в диапазон
        if (strlen($str) >= $from && strlen($str) <= $to ) {
            return true;
        } else {
            return 'Строка не входит в диапазон';
        }
    }
}
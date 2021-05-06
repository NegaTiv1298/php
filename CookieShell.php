<?php
class CookieShell
{
    public function set($name, $value, $time)
    {
        // устанавливает куки
        // $time задает время в сек, через сколько кука умрет
        setcookie($name, $value, $time);
    }

    public function get($name)
    {
        // получает куки
        return $_COOKIE[$name];
    }

    public function del($name)
    {
        // удаляет куки
        setcookie($name, '', time());
    }

    public function exists($name)
    {
        // проверяет наличие куки
        if (isset($_COOKIE[$name])) {
            return 'Данный куки существует';
        } else {
            return 'Не найден куки';
        }
    }
}
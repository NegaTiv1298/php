<?php
class SessionShell
{
    // Удобно стартуем сессию в конструкторе класса:
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function set($name, $value)
    {
        // устанавливает переменную сессии
        $_SESSION[$name] = $value;
    }

    public function get($name)
    {
        // получает переменную сессии
        return $_SESSION[$name];
    }

    public function del($name)
    {
        // удаляет переменную сессии
        unset($_SESSION[$name]);
    }

    public function exists($name)
    {
        // проверяет переменную сессии
        if (!empty($_SESSION[$name])) {
            return 'true';
        } else {
            return 'false';
        }
    }

    public function destroy()
    {
        // разрушает сессию
        session_destroy();
    }
}

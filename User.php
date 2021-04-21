<?php
class User
{
    private static $count = 0;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }
    public static function getCount()
    {
        return self::$count;
    }
}

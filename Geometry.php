<?php
class Geometry
{
    private static $pi = 3.14;

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleCircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }
    public static function vCircle($radius)
    {
        return 4 * self::$pi * pow($radius, 3) / 3;
    }
}

<?php
class Circle
{
    const PI = 3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare($radius)
    {
        return self::PI * pow($radius, 2);
    }

    public function getCircuit($radius)
    {
        return 2 * self::PI * $radius;
    }
}
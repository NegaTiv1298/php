<?php
class Sphere implements iSphere
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return 4 * (self::PI * pow($this->radius, 2));
    }
    public function getVolume()
    {
        return 4 * (self::PI * pow($this->radius, 3)) / 3;
    }
}
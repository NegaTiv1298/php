<?php
class Disk implements iFigure, Circle
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return pi() * pow($this->radius, 2);
    }
    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }
    public function getDiameter()
    {
        return 2 * ($this->getPerimeter() / (2 * pi()));
    }
    public function getRadius()
    {
        return $this->radius;
    }
}
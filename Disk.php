<?php
class Disk implements Figure
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
}


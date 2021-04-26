<?php
class Rectangle extends Figure
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function getSquare()
    {
        return $this->a * $this->b;
    }
    public function getPerimeter()
    {
        return $this->a + $this->b + $this->a + $this->b;
    }
}
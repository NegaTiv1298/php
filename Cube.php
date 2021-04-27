<?php
class Cube implements iCube
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    public function getSquare()
    {
        return 6 * pow($this->a, 2);
    }
    public function getVCube()
    {
        return pow($this->a, 3);
    }
}

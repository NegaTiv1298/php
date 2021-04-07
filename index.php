<?php
class Rectangle
{
    public $height;
    public $width;

    public function getSquare()
    {
      return ($this->height * $this->width);
    }
    public function getPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}
$a1 = new Rectangle;
$a1->width = 2;
$a1->height = 4;
echo $a1->getPerimeter();
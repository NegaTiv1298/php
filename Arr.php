<?php
class Arr
{
    private $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }
    public function add($num)
    {
        $this->numbers = $num;
    }
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}


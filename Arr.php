<?php
class Arr
{
    private $numbers = [];

    public function add($arr = [])
    {
        $this->numbers = array_merge($this->numbers, $arr);
    }
    public function getAvg()
    {
        return array_sum($this->numbers)/count($this->numbers);
    }
}
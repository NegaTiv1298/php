<?php
class Arr
{
    private $numbers = [];

    public function add($num)
    {
        $this->numbers[] = $num;
        return $this;
    }
    public function append($arr = [])
    {
        $this->numbers = array_merge($this->numbers, $arr);
    }
    public function getSum()
    {
        return array_sum($this->numbers);
    }


}


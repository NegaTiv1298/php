<?php
class User
{
    private $numbers = [];

    public function add($num)
    {
        $this->numbers[] = $num;
        return $this;
    }
    public function __toString()
    {
        return (string) array_sum($this->numbers);
    }
}
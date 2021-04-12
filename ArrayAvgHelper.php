<?php
class ArrayAvgHelper
{
    public function getAvg1($arr)
    {
        return $this->getSum($arr, 1);
    }
    public function getAvg2($arr)
    {
        $power = 2;
        $sum2 = $this->getSum($arr, 2);
        return $this->calcSqrt($sum2, $power);
    }
    public function getAvg3($arr)
    {
        $power = 3;
        $sum2 = $this->getSum($arr, 3);
        return $this->calcSqrt($sum2, $power);
    }
    public function getAvg4($arr)
    {
        $power = 4;
        $sum2 = $this->getSum($arr, 4);
        return $this->calcSqrt($sum2, $power);
    }
    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $elem){
            $sum += pow($elem, $power);
        }
        return $sum;
    }
    private function calcSqrt($num, $power)
    {
        return pow($num, 1/$power);
    }
}
<?php
class Arr
{
    private $num = [];
    private $sumHelper;
    private $avgHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->avgHelper = new AvgHelper;
    }
    public function getSum23()
    {
        $nums = $this->num;
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    public function add($number)
    {
        $this->num[] = $number;
    }
    public function getAvgMeanSum()
    {
        return $this->avgHelper->getAvg($this->num) + $this->avgHelper->getMeanSquare($this->num);
    }
}
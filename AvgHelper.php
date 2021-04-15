<?php
//class Employee extends User
//{
//    private $salary;
//
//    public function __construct($name, $surname, $birthday, $salary)
//    {
//        parent::__construct($name, $surname, $birthday);
//        $this->salary = $salary;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary. '$';
//    }
//}

class AvgHelper
{
    private $sumHelper;
    public function __construct()
    {
        $this->sumHelper = new SumHelper;
    }

    public function getAvg($arr)
    {
        return (array_sum($arr) / count($arr));
    }
    public function getMeanSquare($arr)
    {
        return sqrt($this->sumHelper->getSum2($arr)) / count($arr);
    }
}
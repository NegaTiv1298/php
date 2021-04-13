<?php
class Driver extends Employee
{
    private $driverExp;
    private $driverCt;

    public function setDriverExp($exp)
    {
        $this->driverExp = $exp;
    }
    public function setDriverCt($ct)
    {
        $this->driverCt = $ct;
    }
    public function getDriverExp()
    {
        return $this->driverExp;
    }
    public function getDriverCt()
    {
        return $this->driverCt;
    }
}

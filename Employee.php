<?php
class Employee extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
    public function increaseRevenue($value)
    {
        return $this->salary += $value;
    }
    public function decreaseRevenue($value)
    {
        return $this->salary -= $value;
    }
}
<?php
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary.'$';
    }
    private function isAgeCorrect($age)
    {
        return $age >= 1 and $age <= 100;
    }
}
$user = new Employee;
$user->setSalary(760);
echo $user->getSalary();
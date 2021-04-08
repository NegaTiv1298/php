<?php
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary.'$';
    }
    public function __construct($name, $surname, $salary)
    {
        $this->name = $name;
        $this->age = $surname;
        $this->salary = $salary;
    }
}
$user = new Employee('Коля', 'Петров', 900);
echo $user->getName();
echo $user->getSurname();
echo $user->getSalary();
$user->setSalary(1100);
echo $user->getSalary();
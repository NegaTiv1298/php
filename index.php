<?php
class Employee
{
    public $name;
    public $salary;

    public function doubleSalary($salary)
    {
        $this->salary = $salary;
    }
}

$user = new Employee;
$user->name = 'Дима';
$user->salary= 300;
$user->salary *= 2;

echo $user->salary;
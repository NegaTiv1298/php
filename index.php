<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

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
        return $this->salary;
    }
    public function checkAge()
    {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
}

$user1 = new Employee;
$user1->name = 'Вася';
$user1->age = 24;
$user1->salary = 800;

$user2 = new Employee;
$user2->name = 'Дима';
$user2->age = 19;
$user2->salary = 500;

echo $user1->getSalary() + $user2->getSalary();
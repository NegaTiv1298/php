<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
    public function show ($str)
    {
        return $str . ' ' . 'Hello';
    }
}



$user1 = new Employee;
$user1->name = 'Вася';
$user1->age = 24;
$user1->salary = 800;

$user2 = new Employee;
$user2->name = 'Дима';
$user2->age = 27;
$user2->salary = 2300;

echo $user2->show('Dima');

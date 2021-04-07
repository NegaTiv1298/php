<?php
//1
class Employee
{
    public $name;
    public $age;
    public $salary;
}
//2
$user1 = new Employee;
$user1->name = 'Вася';
$user1->age = 24;
$user1->salary = 800;
//3
$user2 = new Employee;
$user2->name = 'Дима';
$user2->age = 27;
$user2->salary = 2300;
//4
echo $user1->salary + $user2->salary.'<br>';
//5
echo $user1->age + $user2->age;
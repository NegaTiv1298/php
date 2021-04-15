<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'StudenT.php';

$user = new User('Коля', 'Петров', '1996-04-16');
echo $user->getBirthday(). '<br>';
echo $user->getAge(). '<br>';

$employee = new Employee('Дима', 'Михайлов', 1992-02-18, 1000);
echo $employee->getName(). '<br>';
echo $employee->getBirthday(). '<br>';
echo $employee->getAge(). '<br>';
echo $employee->getSalary();

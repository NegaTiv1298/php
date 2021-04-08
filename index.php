<?php
require_once 'Employee.php';

$user = new Employee;
$user->name = 'Дима';
$user->surname = 'Петров';
$user->patronymic = 'Андреевич';
$user->salary = 600;

$user1 = new Employee;
$user1->name = 'Вася';
$user1->surname = 'Дикров';
$user1->patronymic = 'Васильевич';
$user1->salary = 670;

echo $user->salary + $user1->salary;
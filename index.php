<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Employee2.php';
require_once 'UsersCollection.php';

$programmer = new Post('Програмист', 1300);
$manager = new Post('Менеджер', 800);
$driver = new Post('Водитель', 500);

$employee = new Employee('Вася', 'Пупкин', $programmer);
echo $employee->getName(). ' ' . $employee->getSurname(). ' ' . $programmer->getName(). ' ' . $programmer->getSalary();
$employee->changePost($manager);


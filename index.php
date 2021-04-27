<?php
require_once 'iUser.php';
require_once 'iEmployee.php';
require_once 'Post.php';
require_once 'Employee.php';
require_once 'FiguresCollection.php';
require_once 'iUser.php';
require_once 'User.php';

$employee = new Employee();
$employee->setName('Kolya');
$employee->setAge(23);
$employee->setSalary(750);
echo $employee->getName(). ' - '. $employee->getAge(). ' - '. $employee->getSalary();

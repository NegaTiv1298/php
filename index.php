<?php
require_once 'User.php';
require_once 'AvgHelper.php';
require_once 'SumHelper.php';
require_once 'Arr.php';

//$user = new User('Коля', 'Петров', '1996-04-16');
//echo $user->getBirthday(). '<br>';
//echo $user->getAge(). '<br>';
//
//$employee = new Employee('Дима', 'Михайлов', 1992-02-18, 1000);
//echo $employee->getName(). '<br>';
//echo $employee->getBirthday(). '<br>';
//echo $employee->getAge(). '<br>';
//echo $employee->getSalary();

$arr = new Arr(); // создаем объект

$arr->add(12);
$arr->add(3);
echo $arr->getAvgMeanSum();
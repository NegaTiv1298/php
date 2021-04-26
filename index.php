<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Students.php';
require_once 'UsersCollection.php';
require_once 'User.php';

$user = new Employee();
$user->setName('Коля');
$user->setSalary(1000);
$user->increaseRevenue(100);
echo $user->getName(). $user->getSalary();
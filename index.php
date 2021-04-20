<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'StudenT.php';
require_once 'Employee2.php';
require_once 'UsersCollection.php';

$usersCollection = new UsersCollection;

$usersCollection->add(new Student('Петя', 100));
$usersCollection->add(new Student('Ваня', 200));

$usersCollection->add(new Employee('Коля', 300));
$usersCollection->add(new Employee('Вася', 400));


echo $usersCollection->getTotalScholarship().'<br>';


echo $usersCollection->getTotalSalary().'<br>';


echo $usersCollection->getTotalPayment();

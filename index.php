<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'StudenT.php';

$user = new User('Коля', 'Петров', '1998-04-16');
echo $user->getBirthday(). '<br>';
echo $user->calculateAge();

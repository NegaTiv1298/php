<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Geometry.php';
require_once 'UsersCollection.php';


$user1 = new User('Коля');
echo User::getCount();
$user2 = new User('Петя');
echo User::getCount();

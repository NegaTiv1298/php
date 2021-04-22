<?php
require_once 'Test.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';

$class = new Test();
$arr = get_object_vars($class);
var_dump($arr);
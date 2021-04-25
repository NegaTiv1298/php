<?php
require_once 'Test.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';

$class = $_GET['class'];
if (class_exists($class)) {
    echo 'Есть';
} else {
    echo 'Нету';
}

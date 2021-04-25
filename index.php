<?php
require_once 'Test.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';

$class = $_GET['class'];
$method = $_GET['method'];
if (class_exists($class)) {
    if (method_exists($class, $method)) {
        $user = new Test;
        echo $user->$method();
    } else {
        echo 'Данный метод не найден';
    }
} else {
    echo 'Данный класс не найден';
}

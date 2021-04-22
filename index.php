<?php
require_once 'Test.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';

if (class_exists(Test::class)) {
    echo 'Есть';
}
if (class_exists(Test3::class)) {
    echo 'Есть';
} else {
    echo 'Нету';
}
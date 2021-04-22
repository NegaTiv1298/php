<?php
require_once 'Test.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';

//$class = get_class_methods(Test::class);
//foreach ($class as $elem) {
//    echo $elem.'<br>';
//}

$test = new Test;
$classArr = get_class_methods(Test::class);
foreach ($classArr as $elem) {
    echo $test->method1(). $test->method2(). $test->method3().'<br>';
}
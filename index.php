<?php
require_once 'Test.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';

$class = new Test();
$classVars = get_class_vars(get_class($class));
foreach ($classVars as $elem) {
    echo $elem;
}
<?php
require_once 'Test.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';


//var_dump(property_exists('Test', 'prop1'));
//var_dump(property_exists('Test', 'prop2'));

$arr = ['prop', 'prop1', 'prop2', 'prop3'];
$class = new Test();
foreach ($arr as $elem) {
    if (property_exists($class, $elem)) {
       $classVars = get_class_vars(get_class($class));
    }
}
var_dump($classVars);

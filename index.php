<?php
require_once 'Test1.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Test2.php';
require_once 'UsersCollection.php';

$arr = [
  new Test1('tes1'),
  new Test1('test11'),
  new Test2('test2'),
  new Test2('test22')
];
foreach ($arr as $elem) {
    if ($elem instanceof Test1) {
        echo $elem->name. '-' . get_class($elem).'<br>';
    }
    if ($elem instanceof Test2) {
        echo $elem->name. '-' . get_class($elem).'<br>';
    }
}
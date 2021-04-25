<?php
require_once 'ParentClass.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'ChildClass.php';
require_once 'UsersCollection.php';
require_once 'GrandParentClass.php';

$child = new ChildClass('child');

if (is_a($child, 'ParentClass')) {
    echo 'true';
} else {
    echo 'false';
}
if (is_a($child, 'ChildClass')) {
    echo 'true';
} else {
    echo 'false';
}
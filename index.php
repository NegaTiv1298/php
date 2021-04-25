<?php
require_once 'ParentClass.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'ChildClass.php';
require_once 'UsersCollection.php';
require_once 'GrandParentClass.php';

$child = new ChildClass('child');
$parent = new ParentClass();
$grParent = new GrandParentClass();

if (is_subclass_of($child, 'GrandParentClass')) {
    echo "ChildClass потомок GrandParentClass";
}
if (is_subclass_of($child, 'ParentClass')) {
    echo 'true';
}
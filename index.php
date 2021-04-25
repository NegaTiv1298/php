<?php
require_once 'ParentClass.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'ChildClass.php';
require_once 'UsersCollection.php';

echo get_parent_class('ChildClass'). '<br>';

echo 'Класс ChildClass потомок класса - '.get_parent_class('ChildClass');

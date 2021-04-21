<?php
require_once 'Circle.php';
require_once 'Employee.php';
require_once 'Post.php';
require_once 'Geometry.php';
require_once 'UsersCollection.php';

$circle = new Circle(10);
echo $circle->getCircuit(10).'<br>';
echo $circle->getSquare(10);
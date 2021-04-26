<?php
require_once 'Figure.php';
require_once 'Rectangle.php';
require_once 'Post.php';
require_once 'Students.php';
require_once 'UsersCollection.php';
require_once 'Figure.php';

$rectangle = new Rectangle(2,4);
$square = $rectangle->getSquare();
$perimeter = $rectangle->getPerimeter();
echo $square. '<br>';
echo $perimeter.'<br>';
echo $rectangle->getSquarePerimeterSum();
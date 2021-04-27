<?php
require_once 'Employee.php';
require_once 'Tetragon.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'Rectangle.php';
require_once 'Programmer.php';
require_once 'iSphere.php';
require_once 'Sphere.php';


$sphere = new Sphere(5);
echo $sphere->getSquare().'<br>';
echo $sphere->getVolume();
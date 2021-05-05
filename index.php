<?php
require_once 'Employee.php';
require_once 'iFile.php';
require_once 'Date.php';
require_once 'Interval.php';
require_once 'File.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'User.php';
require_once 'Programmer.php';
require_once 'Sphere.php';

$file = new File('Sphere.php');

echo $file->getPath().'<br>';
echo $file->getDir().'<br>';
echo $file->getExt().'<br>';
echo $file->getName().'<br>';
echo $file->getSize().' байт'.'<br>';

echo $file->getText();
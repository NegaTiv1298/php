<?php
require_once 'Employee.php';
require_once 'Tetragon.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'Rectangle.php';
require_once 'Programmer.php';
require_once 'iFigure3d.php';
require_once 'Disk.php';


$programmer = new Programmer('Коля', 2300);
$programmer->addLang('php').$programmer->addLang('javascript');
var_dump($programmer->getLangs());

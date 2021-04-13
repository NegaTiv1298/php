<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Programmer.php';

$programmer = new Programmer;
$programmer->setName('Коля');
$programmer->setLangs('eng');
$programmer->setLangs('rus');
$programmer->setLangs('fr');
var_dump($programmer->getLangs());
echo $programmer->getName().'<br>';
echo $programmer->getLangs();

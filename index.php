<?php
require_once 'FileManipulator.php';
require_once 'iFile.php';
require_once 'Date.php';
require_once 'Interval.php';
require_once 'File.php';
require_once 'iFigure.php';
require_once 'SessionShell.php';
require_once 'DatabaseShell.php';
require_once 'CookieShell.php';
require_once 'Validator.php';

$link = new DatabaseShell('localhost', 'root', '', 'test');
//var_dump($link->get('workers', 21));
//$link->getAll('workers', '21,23');
//var_dump($link->selectAll('workers', 'salary = 730'));
$link->save('workers', ['name' => 'Коля', 'age' => '27', 'salary' => '780']);
//$link->del('workers', 25);
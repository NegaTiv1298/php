<?php
require_once 'Employee.php';
require_once 'iFile.php';
require_once 'Date.php';
require_once 'Interval.php';
require_once 'File.php';
require_once 'iFigure.php';
require_once 'SessionShell.php';
require_once 'User.php';
require_once 'CookieShell.php';
require_once 'Sphere.php';

$session = new SessionShell();
//$session->set('Test', '123');
echo $session->get('Test');
//$session->del('Test');
echo $session->exists('Test');
$session->destroy();
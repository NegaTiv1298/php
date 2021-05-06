<?php
require_once 'Employee.php';
require_once 'iFile.php';
require_once 'Date.php';
require_once 'Interval.php';
require_once 'File.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'User.php';
require_once 'CookieShell.php';
require_once 'Sphere.php';

$cook = new CookieShell();
if (!isset($_COOKIE['test'])) {
    $cook->set('test', '1', time() + 3600);
} else {
    $cook->set('test', ($_COOKIE['test'] + 1), time() + 3600);
}
echo 'Вы посетили страницу '. $_COOKIE['test']. ' раз!';

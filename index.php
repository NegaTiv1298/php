<?php
require_once 'FileManipulator.php';
require_once 'iFile.php';
require_once 'Date.php';
require_once 'Interval.php';
require_once 'File.php';
require_once 'iFigure.php';
require_once 'SessionShell.php';
require_once 'User.php';
require_once 'CookieShell.php';
require_once 'Validator.php';

$user = new Validator();
$str = 'levkristi@i.ua';
echo $user->isEmail($str).'<br>';
echo $user->isDomain($str).'<br>';
echo $user->inRange(11, 2,10).'<br>';
echo $user->inLength($str, 5, 10).'<br>';
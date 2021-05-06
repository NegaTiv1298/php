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
require_once 'Sphere.php';

$file = new FileManipulator();
$file->create('text.txt');
$file->rename('text.txt', 'Text.txt');
echo $file->weigh('Text.txt');
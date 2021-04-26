<?php
require_once 'iUser.php';
require_once 'Disk.php';
require_once 'Post.php';
require_once 'Rectangle.php';
require_once 'FiguresCollection.php';
require_once 'iUser.php';
require_once 'User.php';

$user = new User();
$user->setAge(32);
$user->setName('User');
echo $user->getName(). ' - '. $user->getAge();

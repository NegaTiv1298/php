<?php
require_once 'iUser.php';
require_once 'iCube.php';
require_once 'Post.php';
require_once 'Cube.php';
require_once 'FiguresCollection.php';
require_once 'iUser.php';
require_once 'User.php';

$user = new User('Коля', 23);
echo $user->getName(). ' - '. $user->getAge().'<br>';
$cube = new Cube(5);
echo $cube->getSquare(). ' - площадь куба'.'<br>';
echo $cube->getVCube(). ' - объем куба';

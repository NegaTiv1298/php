<?php
require_once 'Figure.php';
require_once 'Disk.php';
require_once 'Post.php';
require_once 'Students.php';
require_once 'UsersCollection.php';
require_once 'Figure.php';

$disk = new Disk(5);
$square = $disk->getSquare();
$perim = $disk->getPerimeter();
echo $square. '<br>' . $perim;
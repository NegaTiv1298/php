<?php
require_once 'iFigure.php';
require_once 'iEmployee.php';
require_once 'Rectangle.php';
require_once 'Quadrate.php';
require_once 'iFigure3d.php';
require_once 'iFigure.php';
require_once 'Cube.php';

$arr = [
  $quadrate1 = new Quadrate(3),
    $cube1 = new Cube(4),
    $rectangle1 = new Rectangle(2,4),
    $quadrate2 = new Quadrate(4),
    $cube2 = new Cube(5),
    $rectangle2 = new Rectangle(3,4)
];
foreach ($arr as $elem) {
    if ($elem instanceof iFigure) {
        echo $elem->getSquare().'<br>';
    }
}
echo '<br>';
foreach ($arr as $elem) {
    if ($elem instanceof iFigure) {
        echo $elem->getSquare(). ' - плоская фигура'.'<br>';
    }
    if ($elem instanceof iFigure3d) {
        echo $elem->getSurfaceSquare(). ' - объемная фигура '. '<br>';
    }
}
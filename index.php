<?php
require_once 'Figure.php';
require_once 'Disk.php';
require_once 'Post.php';
require_once 'Rectangle.php';
require_once 'FiguresCollection.php';
require_once 'Figure.php';

$figure = new FiguresCollection();
$figure->addFigure(new Disk(5));
$figure->addFigure(new Rectangle(2,4));
echo $figure->getTotalSquare().'<br>';
echo $figure->getTotalPerimeter();

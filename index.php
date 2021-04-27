<?php
require_once 'Employee.php';
require_once 'Tetragon.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'Rectangle.php';
require_once 'Programmer.php';
require_once 'iSphere.php';
require_once 'Sphere.php';


if (interface_exists(Tetragon::class)) {
    echo 'true';
}
echo '<br>';

if (interface_exists(Tetragon1::class)) {
    echo 'true';
} else {
    echo 'false';
}
var_dump(get_declared_interfaces());
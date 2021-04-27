<?php
require_once 'Employee.php';
require_once 'Helper.php';
require_once 'iFigure.php';
require_once 'iProgrammer.php';
require_once 'Country.php';
require_once 'Programmer.php';
require_once 'iSphere.php';
require_once 'Sphere.php';


$country = new Country('Ukraine', 340,43000000);
echo $country->getName().' '. $country->getAge(). ' '. $country->getPopulation();
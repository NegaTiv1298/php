<?php
require_once 'Product.php';
require_once 'Employee.php';
require_once 'EmployeesCollection.php';
require_once 'Cart.php';

$employeeCollection = new EmployeesCollection;
$employeeCollection->add(new Employee('Коля', 100));
$employeeCollection->add(new Employee('Дима', 120));
var_dump($employeeCollection->get());

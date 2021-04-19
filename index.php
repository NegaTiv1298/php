<?php
require_once 'Product.php';
require_once 'Employee.php';
require_once 'StudenT.php';
require_once 'Cart.php';

$arr = [
$employee = new Employee('Коля', 300),
$employee = new Employee('Дима', 320),
$employee = new Employee('Вася', 400),

$student = new StudenT('Витя', 180),
$student = new StudenT('Петя', 230),
$student = new StudenT('Едик', 215)
];
var_dump($arr);


foreach ($arr as $elem) {
    if ($elem instanceof Employee) {
        echo $elem->name. '<br>';
    }
}
echo '<br>';
foreach ($arr as $elem) {
    if ($elem instanceof StudenT) {
        echo $elem->name. '<br>';
    }
}
echo '<br>';
foreach ($arr as $elem) {
    if ($elem instanceof Employee) {
       echo array_sum($elem->salary);
    }


}
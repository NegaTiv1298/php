<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'StudenT.php';
require_once 'Employee2.php';
require_once 'UsersCollection.php';

$arr = [
    new Employee('Коля', 730),
    new Employee('Дима', 320),
    new Employee('Вася', 400),

    new StudenT('Витя', 180),
    new StudenT('Петя', 230),
    new StudenT('Едик', 215)
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
$arrSalary = [];
foreach ($arr as $elem) {
    if ($elem instanceof Employee) {
        $arrSalary[] = $elem->salary;
    }
}
echo array_sum($arrSalary).'<br>';

$arrScholarship = [];
foreach ($arr as $elem) {
    if ($elem instanceof StudenT) {
        $arrScholarship[] = $elem->scholarship;
    }
}
echo array_sum($arrScholarship);

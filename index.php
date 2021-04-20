<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'StudenT.php';
require_once 'Employee2.php';
require_once 'City.php';

$arr = [
new User('Коля', 'Петров'),
new User('Петя', 'Николаев'),
new User('Иосиф', 'Сталин'),

new Employee2('Вася', 'Пупкин', 230),
new Employee2('Коля', 'Шпаков', 270),
new Employee2('Петя', 'Шип', 370),

    new City('Мукачево', 83000),
    new City('Ужгород', 140000),
    new City('Хуст', 29000)
];

foreach ($arr as $elem) {
    if ($elem instanceof User) {
        echo $elem->name. '<br>';
    }
}
echo '<br>';
foreach ($arr as $elem) {
    if (!$elem instanceof User) {
        echo $elem->name, '<br>';
    }
}
echo '<br>';

foreach ($arr as $elem) {
    if (!$elem instanceof Employee2 and !$elem instanceof City) {
        echo $elem->name;
    }
}
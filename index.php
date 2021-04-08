<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}
$user = new Employee('Дима', 25, 670);
$user1 = new Employee('Вася', 23, 380);
echo $user->salary + $user1->salary;
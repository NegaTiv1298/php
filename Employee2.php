<?php
class Employee2 extends User
{
    public $salary;

    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name, $surname);
        $this->salary = $salary;
    }
}
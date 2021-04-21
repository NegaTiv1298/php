<?php
class Post
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->salary = $salary;
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}
<?php
class User implements iUser
{
    private $name;
    private $age;
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
}
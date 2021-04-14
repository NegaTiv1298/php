<?php
class User
{
    private $name;
    protected $age;

    public function setName($name)
    {
        if ((mb_strlen($name) >= 3)) {
            $this->name = $name;
        }
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
}
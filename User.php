<?php
class User
{
    private $name;
    private $age;

    public function __set($property, $value)
    {
        switch ($property) {
            case 'name';
            if (empty($this->name)) {
                $this->name = $value;
            }
            break;
            case 'age';
            if ($this->age >= 0 && $this->age <= 70) {
                $this->age = $value;
            }
            break;
        }
    }
    public function __get($name)
    {
        switch ($name) {
            case 'name';
            return $this->name;
            case 'age';
            return $this->age;
        }
    }
}
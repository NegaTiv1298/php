<?php
class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = date('Y-m-d', strtotime($birthday));
        $this->age = $this->calculateAge();
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function getAge()
    {
        return $this->age;
    }
    private function calculateAge()
    {
        $birth = time() - strtotime($this->birthday);
        $date = floor($birth / (60*60*24*365));

        return $date.' год';
    }
}
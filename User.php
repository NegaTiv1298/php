<?php
class User
{
    private $name;
    private $surname;
    private $birthday;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = date('Y-m-d', strtotime($birthday));
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->surname;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function calculateAge()
    {
        $birth = time() - strtotime($this->birthday);
        $date = floor($birth / (60*60*24*365));

        return $date.' год';
    }
}
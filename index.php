<?php
class User
{
    public $name;
    public $age;

    public function isAgeCorrect($age)
    {
        return $age >= 18 && $age <= 60;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    public function addAge($year)
    {
        $newAge = $this->age + $year;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    public function subAge($year)
    {
        $newAge = $this->age - $year;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
}

$user = new User;
$user->age = 30;
$user->setAge(19);
echo $user->age. '<br>';
$user->addAge(10);
echo $user->age. '<br>';
$user->subAge(2);
echo $user->age;
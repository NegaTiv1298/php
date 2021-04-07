<?php
class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        if ($age > 18) {
            $this->age = $age;
        }
    }
}
$user = new User;
$user->age = 24;
$user->name = 'Коля';
$user->setAge(19);

echo $user->age;
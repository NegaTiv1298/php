<?php
class User
{
    private $name;
    private $surname;
    private $patronymic;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;
    }
    public function getFullName()
    {
        return mb_substr($this->surname, 0, 1). mb_substr($this->name, 0, 1). mb_substr($this->patronymic, 0, 1);
    }
}
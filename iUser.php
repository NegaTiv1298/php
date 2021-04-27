<?php
interface iUser
{
    public function setName($name);
    public function setAge($age);

    public function getName(); // получить имя
    public function getAge(); // получить возраст
}

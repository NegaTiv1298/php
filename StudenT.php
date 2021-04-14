<?php
class StudenT extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course)
    {
        $this->course = $course.' курс';
    }
    public function addOneYear()
    {
        $this->age++;
    }
}

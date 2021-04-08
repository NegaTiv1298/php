<?php
class Student
{
    public $course;
    public $name;

    public function transferToNextCourse($course)
    {
        if ($this->isCourseCorrect($course)) {
            $this->course = $course;
        }
    }
    private function isCourseCorrect($course)
    {
        return $course <= 5;
    }
}

$student = new Student;
$student->course = 3;
$student->transferToNextCourse(4);
echo $student->course;
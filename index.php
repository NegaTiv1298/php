<?php
require_once 'Student.php';

$student = new Student('Коля');
echo $student->getName().'<br>';
echo $student->getCourse(). ' Курс'. '<br>';
$student->transferToNextCourse();
echo $student->getCourse(). ' Курс'. '<br>';

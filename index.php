<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'TestStudent.php';

$employee = new Employee;
$employee->setName('Дима');
$employee->setAge(32);
$employee->setSalary(1000);

echo $employee->getName(). ' - '. $employee->getAge(). ' года. Зарплата: '. $employee->getSalary().'<br>';

$student = new TestStudent;
$student->setCourse(3);
$student->setName('Коля');
$student->setAge(22);
echo $student->getName(). ' - '. $student->getAge(). ' года. Курс: '. $student->getCourse();

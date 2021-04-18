<?php
class EmployeesCollection
{
    private $employees = [];

    public function add($newEmployee)
    {
        if (!$this->exist($newEmployee)) {
            $this->employees = $newEmployee;
        }
    }
    public function get()
    {
        return $this->employees;
    }
    private function exist($newEmployee)
    {
        foreach ($this->employees as $employee) {
            if ($employee == $newEmployee) {
                return true;
            }
            return false;
        }
    }
}
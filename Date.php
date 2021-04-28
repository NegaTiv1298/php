<?php
class Date
{
    public $year;
    public $month;
    public $day;
    public $weekday;

    public function __get($name)
    {
        $arrWeek = ['Mon', 'Tue', 'Wed', 'Th', 'Fri', 'Sat', 'Sun'];
        $day = date('w', mktime(0,0,0,$this->month, $this->day, $this->year));
        return $this->weekday = $arrWeek[$day];
    }
}
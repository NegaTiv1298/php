<?php
class Programmer extends Employee
{
    private $langs = [];

    public function setLangs($lang)
    {
        $this->langs[] = $lang;
    }

    public function getLangs()
    {
        return implode(',', $this->langs);
    }
}

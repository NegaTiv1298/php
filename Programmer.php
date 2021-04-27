<?php
class Programmer extends Employee implements iProgrammer
{
    private $langs = [];
    public function addLang($lang)
    {
        $this->langs[] = $lang;
    }
    public function getLangs()
    {
        return $this->langs;
    }
}

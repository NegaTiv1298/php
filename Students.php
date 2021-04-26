<?php
class Students extends User
{
    private $scholarship;

    public function getScholarship()
    {
        return $this->scholarship;
    }

    /**
     * @param mixed $scholarship
     */
    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }
    public function increaseRevenue($value)
    {
        return $this->scholarship += $value;
    }
    public function decreaseRevenue($value)
    {
        return $this->scholarship -= $value;
    }
}

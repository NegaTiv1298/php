<?php
class Test
{
    use Trait1, Trait2, Trait3;
    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}
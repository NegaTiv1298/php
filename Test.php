<?php
class Test
{
    use Trait2;

    public function getSum()
    {
        return $this->method() + $this->method2() + $this->method3();
    }
}
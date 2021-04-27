<?php
class Test
{
    use Trait1, Trait2, Trait3 {
        Trait2::met insteadof Trait3;
        Trait2::met as method2;
        Trait3::met as method3;
    }
    public function getSum()
    {
        return $this->method() + $this->method2() + $this->method3();
    }
}
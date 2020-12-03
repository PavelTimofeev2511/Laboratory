<?php

class A
{
    protected $x;

    public function linear_equation($a, $b)
    {
        if ($a == 0) {
            $error = 'error';
            throw new Error($error);
        }
        return $this->x = [(-$b) / $a];
    }
}

class B extends A
{
    public $d;

    public function quadratic_equation($a, $b, $c)
    {
        if ($a == 0) {
            return $this->linear_equation($a, $b);
        }

        $this->d = $this->discriminant($a, $b, $c);
        if ($this->d == 0) {
            return $this->x = [(-1 * $b + sqrt($this->d)) / (2 * $a)];
        }
        if ($this->d < 0) {
            $error = 'error';
            throw new Error($error);
        }
        return $this->x = [(-1 * $b - sqrt($this->d)) / (2 * $a), (-1 * $b + sqrt($this->d)) / (2 * $a)];


    }

    protected function discriminant($a, $b, $c)
    {
        return ($b * $b) - (4 * $a * $c);
    }


}

$a = new A();
$b = new B();

$otv = $b->quadratic_equation(3.2, -5, 1);

var_dump($otv) ;

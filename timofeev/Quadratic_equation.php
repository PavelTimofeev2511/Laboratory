<?php


namespace timofeev;

use core\EquationInterface;
use mysql_xdevapi\Exception;

class Quadratic_equation extends Linear_equation implements EquationInterface
{
    public $d;

    public function solve($a, $b, $c)
    {
        if ($a == 0) {
            return $this->Linear_equation($b, $c);
        }

        $this->d = $this->Discriminant($a, $b, $c);
        if ($this->d == 0) {
            return $this->x = [(-1 * $b + sqrt($this->d)) / (2 * $a)];
        }
        if ($this->d < 0) {
            $error = 'error';
            throw new Exception($error);
        }
        return $this->x = [(-1 * $b - sqrt($this->d)) / (2 * $a), (-1 * $b + sqrt($this->d)) / (2 * $a)];


    }

    protected function Discriminant($a, $b, $c)
    {
        return ($b * $b) - (4 * $a * $c);
    }


}

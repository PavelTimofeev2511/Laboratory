<?php


namespace timofeev;


class Linear_equation
{
    protected $x;

    public function Linear_equation($a, $b)
    {
        if ($a == 0) {
            $error = 'error';
            throw new Exception($error);
        }
        return $this->x = [(-$b) / $a];
    }
}

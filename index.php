<?php

include 'core/EquationInterface.php';
include 'core/LogInterface.php';
include 'core/LogAbstract.php';
include 'timofeev/linear_equation.php';
include 'timofeev/quadratic_equation.php';
include 'timofeev/Mylog.php';

$answer = new timofeev\quadratic_equation();
$log2 = timofeev\Mylog::Instance();


try {
    $a = readline("a=\n\n");
    $b = readline("b=\n\n");
    $c = readline("c=\n\n");
    $result = $answer->Quadratic_equation($a, $b, $c);
    $str = implode("", $result);
    $log2::log($str);
} catch (Exception $error) {
    $log2::log($error);
}



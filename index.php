<?php

use timofeev\MyLog;

require __DIR__ . "/vendor/autoload.php";

$answer = new timofeev\QuadraticEquation();


try {
    MyLog::Instance()::log("Version: " . trim(file_get_contents("version")) . "\n");
    $a = readline("a= \n\r");
    $b = readline("b= \n\r");
    $c = readline("c= \n\r");

    $equation = $a."x2+(".$b.")x+(".$c.")=0";
    MyLog::Instance()::log("Equation is $equation");
    if ($a == 0) {
        MyLog::Instance()::log("Линейное уравнение");
    } else {
        MyLog::Instance()::log("Квадратное уравнение");
    }

    $result = $answer->solve($a, $b, $c);
    $str = implode("", $result);
    $mes = "Корни уравнения.";
    MyLog::Instance()::log("\n\r". $mes . "\n\r". $str);

} catch (Exception $err) {
    MyLog::Instance()::log($err);
}

MyLog::Instance()::write();
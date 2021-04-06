<?php

use timofeev\MyLog;

require __DIR__ . "/vendor/autoload.php";

$answer = new timofeev\QuadraticEquation();


try {
    timofeev\MyLog::log("Version: " . trim(file_get_contents("version")) . "\n");
    $a = readline("a= \n\r");
    $b = readline("b= \n\r");
    $c = readline("c= \n\r");

    $equation = $a."x2+(".$b.")x+(".$c.")=0";
    MyLog::log("Equation is $equation");
    if ($a == 0) {
        MyLog::Instance()->log("Линейное уравнение");
    } else {
        Mylog::Instance()->log("Квадратное уравнение");
    }

    $result = $answer->solve($a, $b, $c);
    $str = implode("", $result);
    $mes = "Корни уравнения.";
    timofeev\Mylog::log("\n\r". $mes . "\n\r". $str);

} catch (Exception $err) {
    timofeev\Mylog::log($err);
}

timofeev\Mylog::write();
<?php


function getMinNumber(float $firstNum, float $secondNumber, float $thirdNumber){
    return min($firstNum, $secondNumber, $thirdNumber);
}

function getTwoMultipliedNumber(&$firstNumber, &$secondNumber){
    $firstNumber*=2;
    $secondNumber*=2;
}

function factorial($number){
    if ($number<=1) return 1;

    return $number*factorial($number-1);
}

function outputNumberWithZero($number){
    if ($number==0){
        echo $number;
        return;
    }

    outputNumberWithZero($number-1);
    echo " ".$number;
}


echo getMinNumber(49.01, 29.0312, -30.03)."\n";

$firstNumber = 2;
$secondNumber = 3;

getTwoMultipliedNumber($firstNumber, $secondNumber);

echo $firstNumber." ".$secondNumber."\n";

echo factorial(5)."\n";

outputNumberWithZero(10);


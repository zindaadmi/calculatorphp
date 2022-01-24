<?php

namespace Calculator;

use Calculator\Operations\Exponent;
use Calculator\Operations\Percentage;

class Calculator
{
    function exponent($num, $exponent): float
    {
        $exponentObj = new Exponent($num, $exponent);
        return $exponentObj->compute();
    }
    function Percentage($num1, $num2): float
    {
        $PercentageObj = new Percentage($num1, $num2);
        return $PercentageObj->Percentage();
    }
    // Write your functions below

}

<?php

namespace Calculator;

use Calculator\Operations\Exponent;
use Calculator\Operations\Percentage;
use Calculator\Operations\Square;
use Calculator\Operations\Subtraction;
use Calculator\Operations\Add;
use Calculator\Operations\Modulus;
use Calculator\Operations\Divide;
use Calculator\Operations\Multiply;

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

    function Add($num1, $num2): float
    {
        $AddObj = new Add($num1, $num2);
        return $AddObj->Add();
    }

    function Subtraction($num1, $num2): float
    {
        $SubObj = new Subtraction($num1, $num2);
        return $SubObj->Subtract();
    }

    function Square($num): float
    {
        $SquareObj = new Square($num);
        return $SquareObj->sqr();
    }

    function Modulus($num1, $num2): float
    {
        $ModulusObj = new Modulus($num1, $num2);
        return $ModulusObj->mod();
    }
    function Divide($num1, $num2): float
    {
        $DivideObj = new Divide($num1, $num2);
        return $DivideObj->divide();
    }
    function Multiply($num1, $num2): float
    {
        $MultiplyObj = new Multiply($num1, $num2);
        return $MultiplyObj->multiply();
    }
}

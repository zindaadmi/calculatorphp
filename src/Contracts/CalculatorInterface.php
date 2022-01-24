<?php

namespace Calculator\Contracts;

interface CalculatorInterface
{
    function exponent($num, $exponent): float;

    function Percentage($num1, $num2): float;
}
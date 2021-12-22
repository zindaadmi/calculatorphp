<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testPercentage()
    {

        $calculator = new \Calculator\Calculator;
        $result = $calculator->Percentage(100, 20);
        $result1 = $calculator->Percentage(50, 20);
        $result2 = $calculator->Percentage(127, 35);
        $result3 = $calculator->Percentage(1990, 46);
        $result4 = $calculator->Percentage(5, 50);

        $this->assertEquals(20, $result);
        $this->assertEquals(10, $result1);
        $this->assertEquals(44.45, $result2);
        $this->assertEquals(915.40, $result3);
        $this->assertEquals(2.5, $result4);

    }

    public function testExponent()
    {

        $calculator = new \Calculator\Calculator;
        $result = $calculator->exponent(2, 3);

        $this->assertEquals(8, $result);
    }

}


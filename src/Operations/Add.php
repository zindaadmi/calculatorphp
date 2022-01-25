<?php

namespace Calculator\Operations;

/**
 * @author Divya <divya.pitti@mpokket.com>
 */
class Add
{
    private $num1;
    private $num2;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function add()
    {
        return ($this->num1 + $this->num2);
    }

}
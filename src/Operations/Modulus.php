<?php

namespace Calculator\Operations;

/**
 * @author Hanvesh Pinapothu<hanvesh.pinapothu@mpokket.com>
 * TODO: Implement Modulus function
 * TODO: Update Readme
 */
class Modulus
{
    protected $num1;
    protected $num2;

    public function __construct($num1, $num2)
    {
        $this->num1= $num1;
        $this->num2 = $num2;
    }

    public function modulo(){
        return ($this->num1 % $this->num2);
    }
}

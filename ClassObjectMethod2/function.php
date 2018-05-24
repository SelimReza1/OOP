<?php

class Calculation{
    function add($val1 , $val2){
        echo "Summation = ". ($val1 + $val2)."<br>";
    }
    function sub($val1 , $val2){
        echo "Substruction = ". ($val1 - $val2)."<br>";
    }

    function mul($val1 , $val2){
        echo "Multiplication = ". ($val1 * $val2)."<br>";
    }

    function div($val1 , $val2){
        echo "Division = ". ($val1 / $val2)."<br>";
    }


}
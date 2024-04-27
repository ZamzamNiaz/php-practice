<?php
// Make a calculator in php



class Calculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        if ($num2 == 0) {
            return "Can't divide zero";
        } else {
            return $num1 / $num2;
        }
    }
}

$calculator = new Calculator();

echo "Addition: of 5 and 3 = " . $calculator->add(5, 3) . "<br>";
echo "Subtraction: of 10 and 4 = " . $calculator->subtract(10, 4) . "<br>";
echo "Multiplication: of 6 and 2 = " . $calculator->multiply(6, 2) . "<br>";
echo "Division: of 8 and 2 = " . $calculator->divide(8, 2) . "<br>";







?>
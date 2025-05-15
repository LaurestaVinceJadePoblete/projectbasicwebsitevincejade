<?php
$num1 = 10;
$num2 = 5;

function addNumbers($a, $b) {
    return $a + $b;
}

function subtractNumbers($a, $b) {
    return $a - $b;
}

function multiplyNumbers($a, $b) {
    return $a * $b;
}

function divideNumbers($a, $b) {
    return $b != 0 ? $a / $b : "Division by zero error";
}

echo "Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . "<br>";
echo "Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . "<br>";
echo "Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . "<br>";
echo "Division of $num1 and $num2 is " . divideNumbers($num1, $num2) . "<br><br>";
?>

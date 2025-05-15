<?php

echo "<h3>Exercise 7: Fibonacci Series</h3>";
$fib1 = 0;
$fib2 = 1;

echo "$fib1, $fib2";

while (true) {
    $next = $fib1 + $fib2;
    if ($next > 50) break;
    echo ", $next";
    $fib1 = $fib2;
    $fib2 = $next;
}
echo "<br>";

?>
<?php

echo "<h3>Exercise 6: Multiplication Table</h3>";
$start = 1;
$end = 10;
$number = 6;

for ($i = $start; $i <= $end; $i++) {
    echo "$number x $i = " . ($number * $i) . "<br>";
}
echo "<br>";

?>
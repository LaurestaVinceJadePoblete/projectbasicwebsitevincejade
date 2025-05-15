<?php

echo "<h3>Exercise 5: Leap Year</h3>";
$year = 2024;

if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "$year is a leap year.<br><br>";
} else {
    echo "$year is not a leap year.<br><br>";
}

?>
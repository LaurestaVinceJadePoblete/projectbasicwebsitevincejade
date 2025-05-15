<?php

echo "<h3>Exercise 1: Sorting Array (Descending)</h3>";
$NUMBERS = [12, 3, 45, 7, 23, 5];
rsort($NUMBERS); // Sort in descending order
echo "Sorted array (descending): " . implode(", ", $NUMBERS) . "<br><br>";

?>
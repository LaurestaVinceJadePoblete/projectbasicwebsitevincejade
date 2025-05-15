<?php

echo "<h3>Exercise 3: Random Float Number</h3>";
function randNumber($min = 0, $max = 1) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}
echo "Random float number between 1 and 10: " . randNumber(1, 10) . "<br><br>";

?>
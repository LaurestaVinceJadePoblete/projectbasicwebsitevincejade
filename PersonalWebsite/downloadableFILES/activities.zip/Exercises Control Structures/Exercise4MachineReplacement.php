<?php

echo "<h3>Exercise 4: Machine Replacement</h3>";
$workingHours = 9500;
$yearsOld = 8;
$failures = 20;

if ($workingHours > 10000 || $yearsOld > 7 || $failures > 25) {
    echo "Machine should be replaced.<br><br>";
} else {
    echo "Machine is still functional.<br><br>";
}

?>
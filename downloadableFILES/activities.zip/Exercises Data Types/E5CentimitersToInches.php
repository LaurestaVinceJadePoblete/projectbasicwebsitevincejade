<?php
$cm = 100; // Example input in centimeters
$cmToInch = 0.39;

$inch = $cm * $cmToInch;

echo "$cm centimeters is " . number_format($inch, 2) . " inches.";
?>

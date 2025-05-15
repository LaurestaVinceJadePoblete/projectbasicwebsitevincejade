<?php

echo "<h3>Exercise 3: Grading System</h3>";
$points = 77;

if ($points >= 90 && $points <= 100) {
    $grade = 'A';
} elseif ($points >= 80) {
    $grade = 'B';
} elseif ($points >= 70) {
    $grade = 'C';
} elseif ($points >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "Student scored $points points. Grade: $grade. ";
echo ($grade == 'A' || $grade == 'B' || $grade == 'C') ? "Student passed.<br><br>" : "Student failed.<br><br>";

?>
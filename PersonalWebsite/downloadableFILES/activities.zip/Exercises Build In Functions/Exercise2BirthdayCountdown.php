<?php

echo "<h3>Exercise 2: Birthday Countdown</h3>";
$today = new DateTime();
$birthday = new DateTime('2025-12-10'); // Change this to your birthday

// If birthday has passed this year, use next year's birthday
if ($birthday < $today) {
    $birthday->modify('+1 year');
}

$interval = $today->diff($birthday);
echo "Days until your birthday: " . $interval->days . " days<br><br>";

?>
<?php

echo "<h3>Exercise 2: Card Suit</h3>";
$value = 2; // Change to 1-4

if ($value < 1 || $value > 4) {
    echo "Invalid value. Only numbers 1 to 4 are allowed.<br><br>";
} else {
    switch ($value) {
        case 1: echo "Spades<br><br>"; break;
        case 2: echo "Hearts<br><br>"; break;
        case 3: echo "Diamonds<br><br>"; break;
        case 4: echo "Clubs<br><br>"; break;
    }
}

?>
<?php

echo "<h3>Exercise 4: Lowercase Conversion</h3>";
$str = "The Quick BROWN Fox Jumps Over The LAZY Dog!";
function lowercaseCheck($str) {
    return strtolower($str);
}
echo "Lowercase text: " . lowercaseCheck($str) . "<br><br>";

?>
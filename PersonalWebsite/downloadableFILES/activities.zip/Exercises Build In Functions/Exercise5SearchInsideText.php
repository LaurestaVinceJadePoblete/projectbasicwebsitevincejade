<?php

echo "<h3>Exercise 5: Search Punctuation in Text</h3>";
$text = "Hello! This is a test. How many punctuations? Let's find out.";
function searchText($str, $punctuation) {
    $count = substr_count($str, $punctuation);
    echo "The text has $count '$punctuation' punctuation(s).<br>";
}
searchText($text, '.');
searchText($text, '!');
searchText($text, '?');
echo "<br>";

?>
<?php
$price = 100;
$vat = 0.12; // 12% VAT

$totalPrice = $price + ($price * $vat);

echo "Price: $price<br>";
echo "Vat: " . ($price * $vat) . "<br>";
echo "Total price: $totalPrice";
?>

<?php
$price = 100;
$vat = 0.15;

function calculateVat($price, $vat) {
    $calculatedPrice = $price + ($price * $vat);
    return $calculatedPrice;
}

$total = calculateVat($price, $vat);
echo "Price is: $price, VAT is: $vat, Total price is: $total<br><br>";
?>

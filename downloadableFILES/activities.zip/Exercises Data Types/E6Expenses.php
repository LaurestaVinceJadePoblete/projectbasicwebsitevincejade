<?php
$expenses = [1200, 800, 450, 300, 600];

$totalAmount = 0;

foreach ($expenses as $expense) {
    $totalAmount += $expense;
}

$amountOfExpenses = count($expenses);

echo "My $amountOfExpenses biggest expenses were $totalAmount.";
?>

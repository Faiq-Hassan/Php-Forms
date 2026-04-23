<?php
$item1_name = "soap";
$item1_price = 2.50;

$item2_name = "ice cream";
$item2_price = 4.75;

$item3_name = "coke";
$item3_price = 1.25;

$subtotal = $item1_price + $item2_price + $item3_price;
$tax = $subtotal * 0.17;
$grand_total = $subtotal + $tax;

echo "<h3>Shop Bill</h3>";
echo "$item1_name  $" . ($item1_price) . "<br>";
echo "$item2_name  $" . ($item2_price) . "<br>";
echo "$item3_name  $" . ($item3_price) . "<br>";
echo "<br>";
echo "Subtotal: $" . ($subtotal) . "<br>";
echo "Tax (17%): $" . ($tax) . "<br>";
echo "<b>Grand Total: $" . ($grand_total) . "</b><br>";
?>

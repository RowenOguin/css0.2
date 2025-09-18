<?php
$item = "Ballpen";
$quantity = 10;
$price = 20;
$discount = 0.10;
$customer_paid = 300;

$total_order = $quantity * $price;
$discount_amount = $total_order * $discount;
$final_total = $total_order - $discount_amount;
$change = $customer_paid - $final_total;

echo "Item: $item<br>";
echo "Quantity: $quantity<br>";
echo "Price per item: ₱$price<br>";
echo "Total before discount: ₱$total_order<br>";
echo "Discount (10%): ₱$discount_amount<br>";
echo "Total afer discount: ₱$final_total<br>";
echo "amount paid: ₱$customer_paid<br>";
echo "Change: ₱$change<br>";
?>
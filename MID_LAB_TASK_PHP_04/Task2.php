<?php
$vat = 15;
$priceExcludingVat = 50;
$vatToPay = ($priceExcludingVat / 100) * $vat;
$totalPrice = $priceExcludingVat + $vatToPay;
echo "Vat To Pay: ".number_format($vatToPay, 2)."<br>";
echo "Total Price:".number_format($totalPrice, 2);
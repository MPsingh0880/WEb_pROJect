<?php


$totalOrderAmount = 1200; 
$Discount = 1000;


if ($totalOrderAmount > $Discount) {
    $discountApplied = true;
    $msg = "Congratulations! Your order qualifies for a discount.";
} else {
    $discountApplied = false;
    $msg = "Add more items to your cart to qualify for a discount.";
}


echo $msg;


if ($discountApplied) {
 
    $discountPercentage = 10;
    $discountAmount = ($totalOrderAmount * $discountPercentage) / 100;
    $finalAmount = $totalOrderAmount - $discountAmount;
    
    echo "<br>Your total after applying the discount: Rs. " . $finalAmount;
    echo "<br>You saved: Rs. " . $discountAmount;
}

?>

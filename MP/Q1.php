<?php

$Price = 5001;


if ($Price > 5000) {
    $discount = $Price * 0.1; 
    $PriceAfterDiscount = $Price - $discount; 
    echo "Total after 10% discount: Rs. " . $PriceAfterDiscount;
} else {
    
    echo "Total price without discount: Rs. " . $Price;
}

?>
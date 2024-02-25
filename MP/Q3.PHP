<?php

$steps = 500; 


if ($steps < 5000) {
    $Level = "Beginner";
} elseif ($steps <= 10000) {
    $Level = "Intermediate";
} else {
    $Level = "Advanced";
}


echo "Fitness Level: " . $Level;

?>

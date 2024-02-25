<?php


$storedUsername = "user123";
$storedPassword = "password123";

$inputUsername = "user123"; 
$inputPassword = "password123";


if ($inputUsername == $storedUsername && $inputPassword == $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid credentials";
}

?>
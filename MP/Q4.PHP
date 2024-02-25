<?php


$score = 75;

if ($score < 60) {
    $grade = "F";
} elseif ($score <= 70) {
    $grade = "D";
} elseif ($score <= 80) {
    $grade = "C";
} elseif ($score <= 90) {
    $grade = "B";
} else {
    $grade = "A";
}
echo "Grade: " . $grade;

?>

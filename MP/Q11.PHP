<?php

$Ans = ['A', 'C', 'B', 'D', 'A'];

$usersAnswers = ['A', 'B', 'B', 'D', 'A'];

$score = 0;


foreach ($usersAnswers as $index => $answer) {
    if ($answer == $Ans[$index]) {
   
        $score++;
    }
}

$totalScore = ($score / count($Ans)) * 100;

echo "Your score: " . $totalScore . "%";

?>

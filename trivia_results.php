<?php
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];



$totalCorrect = 0;

if ($answer1 == "A") { $totalCorrect++; }

if ($answer2 == "B") { $totalCorrect++; }

if ($answer3 == "A") { $totalCorrect++; }

if ($answer4 == "C") { $totalCorrect++; }

if ($answer5 == "C") { $totalCorrect++; }

echo "<div id='results'>You got $totalCorrect /5 Correct. Would you like to Submit your score to our weekly Scoreboard?</div>";
?>
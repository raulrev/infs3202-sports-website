<?php
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];

$answer5 = $_POST['question-5-answers'];

$answer6 = $_POST['question-6-answers'];

$answer7 = $_POST['question-7-answers'];

$answer8 = $_POST['question-8-answers'];

$answer9 = $_POST['question-9-answers'];

$answer10 = $_POST['question-10-answers'];



$totalCorrect = 0;

if ($answer1 == "A") { $totalCorrect++; }

if ($answer2 == "B") { $totalCorrect++; }

if ($answer3 == "A") { $totalCorrect++; }

if ($answer4 == "C") { $totalCorrect++; }

if ($answer5 == "C") { $totalCorrect++; }

if ($answer5 == "C") { $totalCorrect++; }

if ($answer7 == "C") { $totalCorrect++; }

if ($answer8 == "B") { $totalCorrect++; }

if ($answer9 == "D") { $totalCorrect++; }

if ($answer10 == "C") { $totalCorrect++; }

echo "<div id='results'>You got $totalCorrect /10 Correct. Would you like to Submit your score to our weekly Scoreboard?</div>";
?>
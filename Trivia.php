<!DOCTYPE html>
<?php
session_start();
 ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head-->
    <title>Sports Website</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/trivia.css">
    <!-- js methods -->
    <script type='text/javascript' src="js/jqueryLibrary.js"></script>
    <script type="text/javascript" src="js/searchbar.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
</head>

<body>
    <?php include 'include/header.php';?>	
    <?php include 'sports_data.php';?>
	<div id="testcontent" class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>

            <div id= "SportsSelection" class="col-sm-8"> 
				<h2>This Weeks Quiz!</h2>
					<form action="trivia_results.php" method="post" id="quiz">
					<li>
					<h4>Question 1: Who was the goalkeeper for Arsenal during their 2003/04 undefeated season?</h4>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />

					<label for="question-1-answers-A">A) Jens Lehmann</label>

					</div>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />

					<label for="question-1-answers-B">B) Thomas Sørensen</label>

					</div>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />

					<label for="question-1-answers-C">C) Ian Bennett</label>

					</div>

					<div>

					<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />

					<label for="question-1-answers-D">D) Brad Friedel</label>

					</div>
					<h4>Question 2: Who scored the only goal when Portugal beat France to win Euro 2016?</h4>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />

					<label for="question-2-answers-A">A) Nani</label>

					</div>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />

					<label for="question-2-answers-B">B) Eder</label>

					</div>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />

					<label for="question-2-answers-C">C) Cristiano Ronaldo</label>

					</div>

					<div>

					<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />

					<label for="question-2-answers-D">D) None of the above</label>

					</div>
					<h4>Question 3: Which player scored the first hat-trick of the 2016-17 Premier League season?</h4>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />

					<label for="question-3-answers-A">A) Romelu Lukaku</label>

					</div>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />

					<label for="question-3-answers-B">B) Sadio Mane</label>

					</div>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />

					<label for="question-3-answers-C">C) Christian Benteke</label>

					</div>

					<div>

					<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />

					<label for="question-3-answers-D">D) None of the above</label>

					</div>
					<h4>Question 4: As of December 2016, Danielle Carter is a English footballer that plays for which Women's Premier League team?</h4>

					<div>

					<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />

					<label for="question-4-answers-A">A) Chelsea</label>

					</div>

					<div>

					<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />

					<label for="question-4-answers-B">B) Manchester City</label>

					</div>

					<div>

					<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />

					<label for="question-4-answers-C">C) Arsenal</label>

					</div>

					<div>

					<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />

					<label for="question-4-answers-D">D) None of the above</label>

					</div>
					<h4>Question 5: How many goals did Peter Schmeichel score in his professional career?</h4>

					<div>

					<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />

					<label for="question-5-answers-A">A) 3</label>

					</div>

					<div>

					<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />

					<label for="question-5-answers-B">B) 9</label>

					</div>

					<div>

					<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />

					<label for="question-5-answers-C">C) 11</label>

					</div>

					<div>

					<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />

					<label for="question-5-answers-D">D) None of the above</label>

					</div>
					</li>

					<input type="submit" value="Submit Quiz" />
				</form>
			</div>
			<div class="col-sm-2 sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>

        </div>
    </div>

    <?php include 'signUp.php';?>
    <?php include 'error.php';?> 
    <?php include 'logout.php';?>

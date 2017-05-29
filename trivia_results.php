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
    <link rel="stylesheet" type="text/css" href="css/sports.css">
    <!-- js methods -->
    <script type='text/javascript' src="js/jqueryLibrary.js"></script>
    <script type="text/javascript" src="js/searchbar.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
</head>

<body>
    <?php include 'include/header.php';?>	
    <?php include 'sports_data.php';?>
	<div id=sportspics class = "container-fluid text-right">
	<div id="testcontent" class="container-fluid text-left">
        <div class="row content">
			<?php include 'sideNavigationMenu.php'; ?>
            <div id= "quizData" class="col-sm-8">
				<h2 style = "font-size: 25px">Your Quiz Results!</h2>
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
			</div>
			<div class="col-sm-2 sidenav" style="margin-top: 25px;">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>

        </div>
    </div>
 <script async defer
        src="https://newsapi.org/v1/articles?source=the-next-web&sortBy=top&apiKey=c85d7a8b0bcb471e8666fbf2740b391f">
    </script>
    <?php include 'include/footer.php';?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--Change background colours-->
  

</body>

</html>

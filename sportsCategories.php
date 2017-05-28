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
  
</head>

<body>
    <?php include 'include/header.php';?>	
    <?php include 'sports_data.php';?>
    <div id="testcontent" class="container-fluid text-center">
        <div class="row content">
            <!-- Sidenav -->
          <?php include 'sideNavigationMenu.php'; ?>
            <!--Page Content -->
            <div id= "SportsSelection" class="col-sm-8 text-left">
                <div class="container col-md-12" id="categories-buttons-container" style="margin-left: 50px;">
                    <div class="row">
                        <br>
                        <h4> Sports </h4>
                        <p>
                            <a href="TopNewsFeed.php" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Top News
                            </a>
                            <a href="FootballNewsFeed.php" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Football
                            </a>
                            <a href="NFLNewsFeed.php" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                NFL
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Other Sport
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Other Sport
                            </a>
                        </p>
                    </div>  
                    <hr>

                    <div class="row">
                        <h4> Trivia </h4>
                        <p>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Football
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                NFL
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                F1
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Other Sport
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Other Sport
                            </a>
                        </p>
                        
                    </div>
                    <hr>

                    <div class="row">
                        <h4> News Sources </h4>
                        <p>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                BBC Sports
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                The Sport Bible
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Fox Sports
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                NFL News
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                ESPN
                            </a>
                            <a href="#" class="btn btn-sq-lg btn-default">
                                 <img src="https://maxcdn.icons8.com/Android/PNG/96/Sports/football-96.png" title="Soccer" width="96" height="96"><br/>
                                Football Italia
                            </a>
                        </p>
                    </div>         
                    <hr>

                </div>


        

            </div>

            <div class="col-sm-2 col-md-2 sidenav well">
                <h4> NBA Scheduled Games </h4>               
                <?php echo nbaGameSchedule() ?>
            </div>

        </div>
        
    </div>

    <?php include 'signUp.php';?>
    <?php include 'error.php';?> 
    <?php include 'logout.php';?>
    
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
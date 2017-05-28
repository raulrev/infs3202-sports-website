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
    <link rel="stylesheet" type="text/css" href="css/caru.css">
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
            <!-- center container col -->
            <div id= "TopNews" class="col-sm-8 text-left">
                <!-- news feed container -->
                <div class="row" id="top-group-container" style="margin-left:5px; margin-right:5px;">                    
                    <div class="container-fluid col-md-12" style="border:solid #f1f1f1; margin-top: 10px; margin-bottom:10px;">
                    <br>
                    <h4> Top News </h4>
                    <hr>
                    <div class="carousel slide" id="myCarousel" style="margin-left:-40px;" >
                        <div class="carousel-inner">
                            <?php echo bccTopNews() ?>
                        </div>
                        
                        </div>
                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div> 
                    </div>
                </div> 

                
                <!-- Football container -->
                 <div class="row" id="top-group-container" style="margin-left:5px; margin-right:5px;">                    
                    <div class="container-fluid col-md-12" style="border:solid #f1f1f1; margin-top: 10px; margin-bottom:10px;">
                    <br>
                    <h4> Football News </h4>
                    <hr>
                    <div class="carousel slide" id="myCarousel" style="margin-left:-40px;" >
                        <div class="carousel-inner">
                            <?php echo footballCaru() ?>
                        </div>
                        
                        </div>
                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div> 
                    </div>
                </div> 
                 <!-- fot container close -->
                 <div class="row" id="top-group-container" style="margin-left:5px; margin-right:5px;">                    
                    <div class="container-fluid col-md-12" style="border:solid #f1f1f1; margin-top: 10px; margin-bottom:10px;">
                    <br>
                    <h4> NFL News </h4>
                    <hr>
                    <div class="carousel slide" id="myCarousel" style="margin-left:-40px;" >
                        <div class="carousel-inner">
                            <?php echo nflSources() ?>
                        </div>
                        
                        </div>
                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div> 
                    </div>
                </div> 
                <!-- NFL container -->
                                
            </div>


            <div class="col-sm-2 col-md-2 sidenav well">
                <h5> NBA Scheduled Games </h5>               
                    <?php echo nbaGameSchedule() ?>
            </div>
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
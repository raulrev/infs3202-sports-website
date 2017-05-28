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
    
    <div id="testcontent" class="container-fluid text-center">
        <div class="row content">
            <!-- Sidenav -->
          <?php include 'sideNavigationMenu.php'; ?>
            <!--Page Content -->
            <div class="col-md-10 col-sm-10 text-left container" id="" style="background-color:pink; padding-left: 10px;height: 100px;">
                <br><h4>My Boookmarks </h4><hr>
                <div class="row col-md-11 col-sm-11" id="book-group-container" >
                    <h4>Football</h4>
                    <div class="container col-md-1 col-xs-1" id="fav-star">
                        <span class="fa fa-star fa-2x" style="color:#facf03;" aria-hidden="true"></span>
                        <div class="row">
                            <span class="fa fa-chevron-left fa-3x" id="book-previous-arrow" style="color:#facf03;" aria-hidden="true"></span>
                        </div>
                    </div>
                    
                    <div class="container col-md-9 col-xs-9" id="book-inner-container">
                        <div class="container col-md-12 col-xs-12" id="book-news-container">
                        <!--///////////////////////////////////////////////////////////////////////////-->
                        









                        <!--///////////////////////////////////////////////////////////////////////////-->
                        </div>
                        <div class="row">
                            <div class="container col-md-12 col-xs-12" id="book-pagnum-container">

                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="container col-md-1 col-xs-1" id="book-next-arrow">
                        <span class="fa fa-chevron-right fa-3x" style="color:#facf03;" aria-hidden="true"></span>
                    </div>

                    
                    
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
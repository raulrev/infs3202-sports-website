<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <!-- Title and logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="fa fa-qq fa-1x"></span>   Sports World</a>
            </div>
        </div>
    </div>
    <!--sub heading html-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header ">
                <!-- setup button for menu to collapse -->
                <button type="button" class="navbar-toggle navbar-left" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="sport.php"><span class="fa fa-home fa-1x"></span></a>
            </div>
            <!-- subcategories for the navigation bar -->
            <div class="col-md-7 col-xs-12">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="sport.php">Top News</a></li>
                        <li><a href="sportsCategories.php">Categories</a></li>
                        <li><a href="#">Matches</a></li>
                        <li><a href="#error" data-toggle="modal" data-target="#errorModal">Sports</a></li>
                        <li><a href="bookmarks.php">Bookmarks</a></li>
						<li><a href="Trivia.php">Trivia</a></li>
                    </ul>
                </div>

            </div>
            <!-- Search bar setup -->
            <div class="col-md-4 col-xs-12">
                <ul class="nav navbar-nav navbar-right">
				<form action="/search_results.php" method="get" style = "margin-bottom: -11.5px;">
                    <li><a href="#" id="searchInput"><span class="fa fa-search fa-1x"></span> Search</a></li>

                    <li>
                        <div id="searchbox">
                            <div class="input-group stylish-input-group">
                                <input type="text" name = "Search" id = "search class="form-control" placeholder="Search"/>
                                <span class="input-group-addon">
                <button id="close-search" type="submit">
                    <span class="fa fa-times"></span>
                                </button>
                                </span>
                            </div>
                        </div>
						</form>
                    </li>
                    <!-- Login details -->
                    <li class="dropdown">
                        <div id="login-div">
                            <li class="dropdown-toggle"> <a href="signUpForm.php"><i class="fa fa-user-circle fa-1x"></i>Login</a></li>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</div>
</nav>
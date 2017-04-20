
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <!-- Title and logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><span class="fa fa-qq fa-1x"></span>   Web Name</a>
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
                <a class="navbar-brand" href="#"><span class="fa fa-home fa-1x"></span></a>
            </div>
            <!-- subcategories for the navigation bar -->
            <div class="col-md-7 col-xs-8">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Top News</a></li>
                        <li><a href="#">Select League</a></li>
                        <li><a href="#">Matches</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Bookmarks</a></li>
                    </ul>
                </div>
            </div>
            <!-- Search bar setup -->
            <div class="col-md-4 col-xs-3">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id="searchInput"><span class="fa fa-search fa-1x"></span> Search</a></li>

                    <li>
                        <div id="searchbox">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon">
                <button id="close-search" type="submit">
                    <span class="fa fa-times"></span>
                                </button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- Login details -->
                    <li class="dropdown">
                        <div id="login-div">
                            <li class="dropdown-toggle" data-toggle="dropdown"> <a href="#"><i class="fa fa-user-circle fa-1x"></i>Login</a></li>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="col-md-12">
                                        <medium> Existing users:</medium>
                                        <!-- Enter user details (form) -->
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                            <input type="checkbox"> keep me logged-in
                                        </label>
                                            </div>
                                        </form>
                                        <div class="bottom text-center">
                                            New here ? <a href="#signup" data-toggle="modal" data-target="#myModal"><b>Join Us</b></a>

                                        </div>
                                    </div>
                                    <!-- social media buttons -->
                                    <div class="social-buttons text-center">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Login with Facebook</a>
                                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Login with Twitter</a>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</div>
</nav>
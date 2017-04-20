<?php
include "databaseConnect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Check to see if the user is already logged in. If so, redirect them to the index page.
if (isset($_SESSION['username']) && $_SESSION['authenticated'] == true) {
  header("Location: sport.php");
}

//Make sure user has entered all details - sign user up into DB and redirect them to sports.php
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['country'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
  $password = md5($_POST['password']);
  
  $query = "INSERT INTO webusers VALUES('$username','$email','$country','$password')";

  $result = mysqli_query($conn, $query);

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

    echo "username: " .$username ;
    echo "result: " .$result;
    echo "query: " .$query;
}


 ?>

  <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                    <h4 class="modal-title" id="myModalLabel">Register</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div id="regContainer" class="col-md-8" >
                            <div id="Registration">
                                <form role="form" class="form-horizontal" method="POST">
                                    <div class="form-group">
                                        <label for="fusername" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="femail" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fcountry" class="col-sm-3 control-label">Country</label>
                                        
                                        <div class="col-sm-9">
                                            <input type="country" class="form-control" name="country" placeholder="Select Country" />
                                            <em>1-8 Characters</em>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fpassword" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" placeholder="*******" />
                                        </div>
                                    </div>
                                    
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-sm">Continue</button>
                                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                                        </div>
                                    
                                </form>
                            </div>


                        </div>

                        <div class="col-md-3">
                            <div class="row text-center sign-with">
                                <div class="col-md-12">
                                    <h4>Sign in with</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="social-buttons text-center">
                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Login with Facebook</a>
                                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Login with Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

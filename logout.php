<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/logForm.css">
  <title>Error</title>
</head>

<body>

    <div class="forma" style="background-color: #222;">
          <h1>Thanks for using our website</h1>
              
          <p><?= 'You have been successfully logged out!'; ?></p>
          
          <a href="signUpForm.php"><button class="button-block" style="background-color:#3c643c; font-size: 2rem;
  font-weight: 500; text-transform: uppercase; color: white; border:none;">Return to the main page</button></a>

    </div>
</body>
</html>

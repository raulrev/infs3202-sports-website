<?php
$servername = "localhost";
$database="sports_user_data";
$password = " ";

// Create connection
$conn = new mysqli($servername, $database, $password);
echo $password;
if ($conn->connect_error)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
else
{
  echo "Successfully connected to your database…";
}
?>
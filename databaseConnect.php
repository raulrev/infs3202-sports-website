<?php
$servername = "localhost";
$database="sports_data";
$username = "pma";
$password = "";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database) or die($mysqli->error);
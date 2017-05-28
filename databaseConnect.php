<?php
$servername = "localhost";
$database="accounts";
$username = "pma";
$password = "";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database) or die($mysqli->error);


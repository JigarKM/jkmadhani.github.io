<?php
$servername = "localhost:1433";
$username = "root";
$password = "";
 $db = "donatetheblood";

// Create connection
$connection = new mysqli($servername, $username, $password,$db);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

?>
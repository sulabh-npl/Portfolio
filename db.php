<?php 
$servername = "localhost";
$username = "sulabhin_nepal";
$password = "sulabh1919";
$dbname = "sulabhin_nepal";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

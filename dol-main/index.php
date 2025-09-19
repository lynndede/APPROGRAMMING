<?php
//echo "Today is" .date("l, F j, Y"). "<br>";

$servername = "localhost";
$username = "root";
$password = "lynndede30";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
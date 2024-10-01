<!-- db_connect.inc -->

<?php
//db_connect.inc
//Check what server you are accessing
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WP";
} else {
$servername = "talsprddb02.int.its.rmit.edu.au";
$username = "s4007082";
$password = "Rmit1234!";
$dbname = "s4007082";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>


<!-- end of db_connect.inc -->

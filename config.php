<?php
$servername = "localhost";
$username = "arteg_db";
$password = "arteg123!@#";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,"arteg_db");
?>
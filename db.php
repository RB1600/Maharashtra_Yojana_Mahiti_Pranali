<?php
$host = "localhost";      
$dbname = "yojana_pranali";    
$user = "root";           
$pass = "";              

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

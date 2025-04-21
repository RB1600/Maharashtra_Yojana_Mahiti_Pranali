<?php
include('../db.php');

$username = 'Rohit';
$password = password_hash('admin123', PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Admin user created successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

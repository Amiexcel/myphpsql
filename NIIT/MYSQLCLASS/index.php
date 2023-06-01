<?php
$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password);

if($conn) {
    echo "connected Successfully";
} else {
    die ("connection failed :" . mysqli_connect_error());
}

$sql = "CREATE DATABASE php_class";
if (mysqli_query($conn, $sql)) {
    echo "Database created";
} else {
    echo "Error creating Database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
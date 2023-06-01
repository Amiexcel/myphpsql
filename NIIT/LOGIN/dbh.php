<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "newLoginProject";

// $conn = mysqli_connect($server, $username, $password);
$conn = mysqli_connect($server, $username, $password, $dbname);

// if ($conn) {
//     echo "Connected Successfully";
// } else {
//     die ("Connection failed: " . mysqli_connect_error());
// }

// $sql = "CREATE TABLE logindata (id INT(10) AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(225), email VARCHAR(225), phone VARCHAR(225), password VARCHAR(225))";

// $sql = "CREATE DATABASE newLoginProject";

// if (mysqli_query($conn, $sql)) {
//     echo "Database created succesefully";
// } else {
//     echo "Error creating Database";
// }


?>
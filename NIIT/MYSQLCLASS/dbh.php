<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "php_class";

$conn = mysqli_connect($server, $username, $password, $dbname);

if($conn) {
    echo "connected Successfully";
} else {
    die ("connection failed :" . mysqli_connect_error());
}

// $table = "CREATE TABLE Students(
//     id INT(10) AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(255),
//     lastname VARCHAR(255),
//     email VARCHAR(255),
//     phone VARCHAR(200)
// )";

$sql = "INSERT INTO Students (firstname, lastname, email, phone)
VALUE ('John', 'Doe', 'johndoe@example.com', '123456');";

$sql .= "INSERT INTO Students (firstname, lastname, email, phone)
VALUE ('Declan', 'Rice', 'declan@example.com', '567890');";

$sql .= "INSERT INTO Students (firstname, lastname, email, phone)
VALUE ('Tiwa', 'Savage', 'twsavage@example.com', '+2348033456701');";

if (mysqli_multi_query($conn, $sql)) {
    echo "Data added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
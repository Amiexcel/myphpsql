<?php
include "dbh.php";
 //Error Variables   
$fnameErr = $emailErr = $phoneErr = $passwordErr = $repeatPasswordErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 //Creating Variables
   
//Data Variables
    $fname = $email = $phone = $password = $repeatPassword = "";

    if (empty($_POST['fname'])){
        $fnameErr = "First name cannot be empty";
    } else {
        $fnameErr = "";
        $fname = $_POST['fname'];
    }
    if (empty($_POST['email'])){
        $emailErr = "Enter your email address";
    } else {
        $emailErr = "";
        $email = $_POST['email'];
    }
    if (empty($_POST['phone'])){
        $phoneErr = "Phone number cannot be empty";
    } else {
        $phoneErr = "";
        $phone = $_POST['phone'];
    }
    if (empty($_POST['password'])){
        $passwordErr = "Enter correct password";
    } else {
        $passwordErr = "";
        $password = $_POST['password'];
    }
    if (empty($_POST['repeatpassword'])){
        $repeatPasswordErr = "Forgot your password?";
    } else {
        $repeatPasswordErr = "";
        if ($repeatPassword = $_POST['repeatpassword']) {
            $repeatPassword = $_POST['repeatpassword'];
        } else {
            $repeatPasswordErr = "Password does not match";
        }
    }

if (empty($fnameErr) and empty($emailErr) and empty($phoneErr) and empty($passwordErr) and empty($repeatPasswordErr)) {

    $password = md5($password);
    $sql = "INSERT INTO logindata(firstname, email, phone, password) VALUES ('$fname', '$email', '$phone', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Record Inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

}

mysqli_close($conn);
?>
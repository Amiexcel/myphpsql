<?php
$fnameErr = $emailErr = $phoneErr = $passwordErr = $confirmPasswordErr = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $email = $phone = $password = $confirmPassword = "";
    
    if (empty($_POST['fname'])){
        $fnameErr = "Enter your first name";
    } else if (preg_match_all("/\d/i", $_POST['fname']) != 0){
        $fnameErr = "First Name has a number";
    } else {
        $fnameErr = "";
        $fname = $_POST['fname'];
    }
    if (empty($_POST['email'])){
        $emailErr = "Email cannot be empty";
    } else {
        $emailErr = "";
        $email = $_POST['email'];
    }
    if (empty($_POST['phone'])){
        $phoneErr = "Enter your phone number";
    } else {
        $phoneErr = "";
        $phone = $_POST['phone'];
    }
    if (empty($_POST['pass'])){
        $passwordErr = "Fill the required field";
    } else if (preg_match_all ("/\S/i", $_POST['pass']) < 8){
        $passwordErr = "Password must contain more <br> than 8 characters";
    } else if (preg_match_all ("/\s/i", $_POST['pass']) != 0){
        $passwordErr = "This field must not <br> contain empty space";
    } else {
        $passwordErr = "";
        $pass = $_POST['pass'];
    }
    if (empty($_POST['cpass'])){
        $confirmPasswordErr = "Password does not match";
    } else {
        $confirmPasswordErr = "";
        $cpass = $_POST['cpass'];
    }
}
?>
<?php include "specify.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
  <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <h2>Registration Form</h2>
    <input id="fname" placeholder="First Name" name="fname" type="text">
    <br>
    <p class="error"> <?php echo $fnameErr?> </p>
    <input id="mail" placeholder="Email" name="email" type="email">
    <br>
    <p class="error"> <?php echo $emailErr?> </p>
    <input id="phone" placeholder="Phone Number" name="phone" type="number">
    <br>
    <p class="error"> <?php echo $phoneErr?> </p>
    <input id="pass" placeholder="Password" name="pass" type="password">
    <br>
    <p class="error"> <?php echo $passwordErr?> </p>
    <input id="cpass" placeholder="Confirm Password" name="cpass" type="password">
    <br>
    <p class="error"> <?php echo $confirmPasswordErr?> </p>
    <input id="submit" placeholder="Submit" name="submit" type="submit">
  </form>  
</body>
</html>
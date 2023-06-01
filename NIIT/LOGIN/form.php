<?php include "verify.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <input type="text" name="fname" id="" placeholder="first Name">
        <br>
        <p class="error"><?php echo $fnameErr?></p>
        <input type="email" name="email" id="" placeholder="Email Address">
        <br>
        <p class="error"><?php echo $emailErr?></p>
        <input type="number" name="phone" id="" placeholder="Phone Number">
        <br>
        <p class="error"><?php echo $phoneErr?></p>
        <input type="password" name="password" id="" placeholder="Password">
        <br>
        <p class="error"><?php echo $passwordErr?></p>
        <input type="password" name="repeatpassword" id="" placeholder="Repeat Password">
        <br>
        <p class="error"><?php echo $repeatPasswordErr?></p>
        <input type="submit" name="submit" id="">
    </form>
    
</body>
</html>
<?php include 'intro.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="post" action="index.php">
        <input type="text" name="first-name"><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Collects value from input field
        $name = $_REQUEST['first-name'];
        if ($name == "") {
            echo "Name is empty";
        } else if (preg_match_all("/\d/i", $name) != 0){
            echo "Name has a number";
        } else {
            echo $name;
        }
    }
    ?>
    
    






<?php
echo "<h1>Amazing World!</h1>"
?>
<h1><?php echo "This is a test"?></h1>


<?php
//variables(constants variables and temporary variables)
$name = "Amara";
?>
<h1> <?php echo $name ?></h1>
<?php
$name = "Amara";
$name = "Atugo";
define("username", "Atuchukwu");
echo username;
?>
</body>
</html>
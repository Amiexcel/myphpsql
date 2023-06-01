<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIIT</title>
</head>
<body>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Collects value from input field
        $name = $_REQUEST['first-name'];
        if ($name == "") {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
    
</body>
</html>
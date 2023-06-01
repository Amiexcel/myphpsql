<?php  include  "verify.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <header>
        <h1>Welcome, Admin<br> Write your blog here</h1>
    </header>
    <section>
        <form action="" method="post">
            <input type="text" placeholder= "Blog Name" name= "blogName"> 
            <p class= "err"><?php echo $blogNameErr?></p>
            <input type="text" placeholder="Title..." name="title">
            <p class= "err"><?php echo $titleErr ?></p>
            <input type="text" placeholder="Author..." name="author">
            <p class= "err"><?php echo $authorErr ?></p>
            <textarea name="blog" id="" cols="30" rows="30" placeholder="Write here..."></textarea>
            <p class= "err"><?php echo $blogErr ?></p>
            <input type="submit" value="Post">
        </form>
    </section>
</body>
</html>
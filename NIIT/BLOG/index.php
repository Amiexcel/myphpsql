<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h2>Awa Blog</h2>
            </div>
            <ul>
                <li><a href="Admin/admin.php">Admin</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <a href="#" class="navLink">Sign Up</a>
        </nav>
        <div class="banner">
            <h1>Welcome to <br> <span>Awa</span>Blog</h1>
        </div>
    </header>
    <section>
    <?php include "blog-links.php" ?>
</section>
</body>
</html>
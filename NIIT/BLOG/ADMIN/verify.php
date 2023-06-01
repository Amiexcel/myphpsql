<?php
// Errors
$titleErr = $authorErr = $blogErr= $blogNameErr = "";
$title = $author = $blog = $blogName = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty($_POST["title"])){
        $titleErr = "Please include title";
    } else{
        $title = $_POST["title"];
    }
    if(empty($_POST["author"])){
        $authorErr = "Please include an author";
    } else{
        $author = $_POST["author"];
    }
    if(empty($_POST["blog"])){
        $blogErr = "The field must not be empty";
    } else{
        $blog = $_POST["blog"];
    }
    if(empty($_POST["blogName"])){
        $blogNameErr = "Enter blog name";
    } else{
        $blogName = $_POST["blogName"];
    }
    if (empty($blogErr) and empty($authorErr) and empty($blogNameErr) and empty($titleErr)) {
        $fileName = "../Blog-Pages/" . $blogName . ".php"; 
        $fileName2 = "Blog-Pages/" . $blogName . ".php"; 
        $newFile = fopen($fileName, "w")
        or die("Unable to post");

        fwrite($newFile, '<?php include "../Admin/verify.php"?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Blog Demo</title>
            <link rel="stylesheet" href="./style.css">
        </head>
        <body>
            <header>
                <nav>
                    <a href="../index.php">&larr;</a>
                    <!-- To get an icon, search back unicode on google -->
                </nav>
                <div class="titleSec">
                    <h1>' . $title. '</h1>
                </div>
                <hr>
                <div class="infoSec">
                    <span>' . $author. '</span>
                    <span>Feb 16, 2018</span>
                </div>
            </header>
            <section>
                <p>' . $blog. '</p>
            </section>
        </body>
        </html>');
        fclose($newFile);
        header("Location: ../index.php");

        $appendFile = fopen("../blog-links.php", "a");
        fwrite($appendFile, "<a href = '" . $fileName2 . "'>" . $title . "</a>");
        fclose($appendFile);


        //<a href = 'fileName.php'> File Title</a>
    }
}
?>
<?php require "functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced PHP</title>
</head>
<body>
   <?php
  echo date("y-m-d");
  //Y - Year
  //M - Month
  //D - Day
  //L - Day of the Week 
   ?> 
   <br>
   <span>&copy; Big West Studios, 2010 - <?php echo date("Y") ?></span>
   <br>
   <?php
   //H - 24 hours clock (hour)
   //h - 12 hours clock (hour)
   //i - Minutes
   //s - Seconds
   //a - am/pm
   date_default_timezone_set("Africa/Lagos");
   echo date("h:i:sa");
   echo "<br>";
   $myDate = strtotime("Sunday");
   echo date("d/m/y", $myDate);
   echo "<br>";
//    echo readfile("readme.txt");
   $myFile = fopen("readme.txt", "r") or die ("Unable to read file");

//    echo fread($myFile, filesize("readme.txt"));
//    fclose($myFile);
   echo "<br>";
   echo fgets($myFile) . "<br>";
   echo fgets($myFile) . "<br>";
   echo fgets($myFile) . "<br>";
   echo fgetc($myFile);
   fclose($myFile);

   //r - read only
   //w - write (replaces by deleting the existing content and allows you to write something else)
   //a- append (allows the user to append more texts)
   //x - new file (creates new file) e.g  $myFile = fopen("newreadme.txt", "x") or die ("Unable to read file");
   //r+ - read and write
   //w+ -
   //a+ -


   //fread (file name , file size) - reads the whole file
   //fgets - reads a single line on the file
   //fopen - open a file
   //fgetc - reads a single character
   //fclose - close a file

   //Check the end of file
   //feof(); - file end of file...takes you to the end of the file.

    echo "<br>";
   $myFile = fopen("poem.php", "r") or die ("Unable to read file");
   while(!feof($myFile)) {
      echo fgets($myFile) . "<br>";
   };
   fclose($myFile);

   $newFile = fopen("plural.txt", "w")
   or die ("Unable to read file");
   fwrite($newFile, "Hello, the plural is women");
   fclose($newFile);

   $newFile = fopen("test.html", "w")
   or die ("Unable to read file");
   $htmlCode = "<html>\n<head>\n<title>Hello</title>\n</head>\n<body>\n<h1>This is stressful</h1>\n</body>\n</html>";
   fwrite($newFile, $htmlCode);
   fclose($newFile);

   ?>
</body>
</html>
<?php
//PHP MATH
//Pi
echo (pi()); echo "<br>";
//min & max value
echo(min(0, 150, 10, 20, 30, -20, -40));
echo "<br>";
echo(max(0, 150, 10, 20, 30, -20, -40));
echo "<br>";
//absolute positive
echo(abs(-50));
echo "<br>";
//square root
echo(sqrt(144));
echo "<br>";
//round off
echo(round(0.765));
echo "<br>";
//random number generator
echo(rand());

//PHP STRING
//length of a string
echo strlen("Beautiful World");
echo "<br>";
//word count
echo str_word_count("Peaceful World");
echo "<br>";
//reversing a string
echo strrev("Serenity");
echo "<br>";
//string position
echo strpos("Hello World", "1");
echo "<br>";
//string replace
echo str_replace("World", "Earth", "Hello World");
echo "<br>";
$num = 12;

//ARRAYS
$cars = array("Volvo", "BMW", "Toyota", "Mazda", "Nissan");
echo $cars[0];
echo "<br>";
echo count($cars);
echo "<br>";
$cars[1] = "Benz";
echo $cars[1];
echo "<br>";
//loop through an array
$arrLength = count($cars);
for ($i = 0; $i < $arrLength; $i++){
    echo $cars[$i];
    echo "<br>";
}
//For each loop
foreach ($cars as $i) {
    echo $i;
    echo "<br>";
}
//Associative arrays
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "40");
echo $age["Peter"];
echo "<br>";
//Multidimensional arrays
$studentInfo = array(
     array("Name" => "John", "Age" => "21", "dept" => "CSC"),
     array("Name" => "Jane", "Age" => "20", "dept" => "PHY"),
     array("Name" => "Jack", "Age" => "22", "dept" => "MED"),
);
echo $studentInfo[2] ["Age"];
echo "<br>";
//Global Variables, Super Globals
function testFunction() {
    $GLOBALS['testV'] = 10;
};
testFunction();
echo $testV;
echo "<br>";

echo $_SERVER['PHP_SELF']; //This prints out the file name of the script
echo "<br>";
echo $_SERVER['SERVER_NAME']; //This print out server's name
echo "<br>";
echo $_SERVER['HTTP_HOST']; //This returns the host of your server
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; 
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
// to generate random number
echo (rand(10, 100));
?>
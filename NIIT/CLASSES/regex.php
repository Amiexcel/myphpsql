<?php
$text = "This is a php class at NIIT, Festac";
echo preg_match_all ("/a/i", $text);
?>
<?php
$fname = "Atuchukwu277348959682";
echo preg_match_all ("/\d/i", $text); //Checks the digits in a text
echo preg_match_all ("/\D/i", $text); //Checks non digits
echo preg_match_all ("/\s/i", $text); //Checks white spaces in a text
echo preg_match_all ("/\S/i", $text); //Counts non-white spaces
echo preg_match_all ("/\a/i", $text); //Checks how many times "a" appear in a text
echo preg_match_all ("/\W/i", $text); //Takes in any symbols except underscore
echo preg_match_all ("/\w/i", $text); //Takes non symbols and underscore

//To start a regular expression, put in the quotes "" to represent searching through a string, put in your forward slashes // to represent starting and ending your expression, add an i to represent case-insensitivity.

?>
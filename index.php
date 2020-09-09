<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php from scratch</title>
</head>
<body>
    

<form method="GET">
  <input type="text" name="special">
  <button>Submit</button>
</form>

<?php
//Getting input from user in php

/*
 $name = $_GET['special'];
 echo $name." is just so spectacular"; */


 //Functions
/*
 echo strlen("Milli is Spectacular");  //Counts number of characters in a string
 echo str_word_count("Milli is spectacular");  //Counts the number of words

 echo str_replace("Milli", "Asong", "Milli is spectacular"); // replaces Milli with Asong

 echo strpos("Milli is spectacular", "is"); //tells the position number of is (for the first letter)

 echo str_repeat("Milli is spectacular", "3") */


 //Data types in php (arrays)
/* $milli = array("milli", "Asong", "Ranibel");
 echo $milli['1'];*/

  //Conditional statements
/*
  $y = 4;
  $x = 4;

  if ($y == 5) {
       echo "The result is 5";
  }

  elseif ($y  == $x) {
       echo "x and y are the same.";
  }

  else {
    echo "Wrong answer";
  }

  */

$x = 10;

switch ($x) {
  case 10:
    echo "answer is 10"; 
  break;

  
}

?>
</body>
</html>
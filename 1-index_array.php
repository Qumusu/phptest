<?php

$myArray = array("Rob","Kirten","Tommy","Ralphie");

print_r($myArray);

echo "<br><br>";
    
echo $myArray[1];

echo "<br><br>";

$anotherArray[0] = "pizza";
$anotherArray[1] = "chocolate";
$anotherArray[5] = "coffee";

print_r($anotherArray);

echo "<br><br>";

$anotherArray["myFavorite"] = "ice cream";

print_r($anotherArray);

$thirdArray = array("France" => "French","USA" => "English","Germany" => "German");

echo "<br><br>";
echo sizeof($thirdArray);

echo "<br><br>";
print_r($thirdArray);

unset($thirdArray["France"]);
echo "<br><br>";
print_r($thirdArray);
echo sizeof($thirdArray);

    
?>
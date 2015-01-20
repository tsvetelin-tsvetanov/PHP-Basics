<?php
$text = $_GET['text'];
$red = $_GET['red'];
$red = dechex($red);
if(strlen($red) < 2){
    $red = "0".$red;
}
$green = $_GET['green'];
$green = dechex($green);
if(strlen($green) < 2){
    $green = "0".$green;
}
$blue = $_GET['blue'];
$blue = dechex($blue);
if(strlen($blue) < 2){
    $blue = "0".$blue;
}
$nth = $_GET['nth'];

$color = "#".$red.$green.$blue;

echo "<p>";
for($i = 0, $count = 1; $i < strlen($text); $i++, $count++){
    $char = htmlspecialchars($text[$i]);
    if($count % $nth == 0){
        echo "<span style=\"color: $color\">$char</span>";
    } else {
        echo $char;

    }
}

echo "</p>";
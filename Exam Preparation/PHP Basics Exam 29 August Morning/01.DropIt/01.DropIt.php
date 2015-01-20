<?php
$text = $_GET['text'];
$minFontSize = intval($_GET['minFontSize']);
$maxFontSize = intval($_GET['maxFontSize']);
$step =        intval($_GET['step']);

$decoration = "";
$increasing = true;
$currentSize = $minFontSize;
for($i = 0; $i < strlen($text); $i++){

    if (ord($text[$i]) % 2 == 0) {
        $decoration = "text-decoration:line-through;";
    } else {
        $decoration = "";
    }
    echo "<span style=\"font-size:$currentSize; $decoration\">"
    .htmlspecialchars($text[$i])."</span>";

    if((ord($text[$i]) >= ord('a') && ord($text[$i]) <= ord('z')) ||
		((ord($text[$i]) >= ord('A') && ord($text[$i]) <= ord('Z')))){
        if($increasing){
            $currentSize += $step;
        } else {
            $currentSize -= $step;
        }
    }

    if($currentSize > $maxFontSize){
        $increasing = false;
    } else if($currentSize < $minFontSize){
        $increasing = true;
    }

    echo "<span style=\"font-size:$currentSize; $decoration\">"
        .htmlspecialchars($text[$i])."</span>";
}



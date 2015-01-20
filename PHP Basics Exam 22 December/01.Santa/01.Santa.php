<?php
$childName = $_GET['childName'];
$wantedPresent = $_GET['wantedPresent'];
$riddles = $_GET['riddles'];

$riddlesArr = [];
$riddlesArr = explode(';', $riddles);

$childName = str_replace(" ", "-", $childName);
$getRiddle = (strlen($childName) % count($riddlesArr));
if($getRiddle > 0){
    $getRiddle -= 1;
} else {
    $getRiddle = count($riddlesArr) - 1;
}
echo '$giftOf'.htmlspecialchars($childName).' = $[wasChildGood] ? \''.htmlspecialchars($wantedPresent).'\' : \''.htmlspecialchars($riddlesArr[$getRiddle]).'\';';




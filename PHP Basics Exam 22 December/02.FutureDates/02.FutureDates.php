<?php
date_default_timezone_set('UTC');
$numbersString = $_GET['numbersString'];
$datesString = $_GET['dateString'];

//get numbers and sum them
$numbersPattern = '/([^a-zA-Z]\d+[^a-zA-Z])/';
preg_match_all($numbersPattern, $numbersString, $numberMatches);

$sum = 0;

for($i = 0; $i < count($numberMatches[0]); $i++){
    preg_match_all('!\d+!', $numberMatches[0][$i], $num);
    $num = $num[0][0];
    $sum += $num;
}
$sum = strrev($sum);

//get dates
$datesPattern = '/(\d\d\d\d-\d\d-\d\d)/';
preg_match_all($datesPattern, $datesString, $dateMatches);

if(count($dateMatches[0]) == 0){
    echo '<p>No dates</p>';
} else {
    echo "<ul>";
    for($i = 0; $i < count($dateMatches[0]); $i++){
        $date = $dateMatches[0][$i];
        echo "<li>".date('Y-m-d', strtotime($date. " + ".$sum. "days"))."</li>";
    }
    echo "</ul>";
}

//var_dump($dateMatches[0]);
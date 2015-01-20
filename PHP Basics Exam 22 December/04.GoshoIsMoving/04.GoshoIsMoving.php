<?php
$luggage = $_GET['luggage'];
$typeLuggage = $_GET['typeLuggage'];
$room = $_GET['room'];
$minWeight = $_GET['minWeight'];
$maxWeight = $_GET['maxWeight'];

$luggage = trim($luggage);
$luggageArr = explode("C|_|", $luggage);

$elements = [];
$count = 0;
foreach($luggageArr as $element){
    $element = explode(";", $element);
    $elements[$count] = $element;
    $count++;
}
unset($elements[count($elements) - 1]);
//var_dump($elements);

$roomsTotal = [];
$count = 0;

foreach($elements as $element){
    $typeLuggageCheck = false;
    $roomCheck = false;
    $itemType = $element[0];
    $roomName = $element[1];
    $itemName = $element[2];
    $itemWeight = intval($element[3]);

    if(in_array($element[0], $typeLuggage, true)){
        $typeLuggageCheck = true;
    }
    if($room == $roomName){
        $roomCheck = true;
    }
    if(!in_array($itemType, $roomsTotal, true)){
        $roomsTotal[] = $itemType;
        $roomsTotal[$itemType] = [];
        $roomsTotal[$itemType] = array($roomName);
    } else {

    }



}

var_dump($roomsTotal);


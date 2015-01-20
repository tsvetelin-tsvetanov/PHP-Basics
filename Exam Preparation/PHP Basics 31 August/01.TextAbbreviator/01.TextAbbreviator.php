<?php
$text = inputList();
$maxSize = intval($_GET['maxSize']);

echo "<ul>";
foreach($text as $string){
    if(strlen($string) <= $maxSize){
        echo "<li>".htmlspecialchars($string)."</li>";
    } else {
        $result = substr($string, 0, $maxSize);
        $result .= "...";
        echo "<li>".htmlspecialchars($result)."</li>";
    }
}
echo "</ul>";
function inputList(){
    $list = $_GET['list'];
    $lines = preg_split("/\n/", $list);
    $listArray = [];
    foreach($lines as $line){
        $line = trim($line);
        if($line != ""){
            $listArray[] = $line;
        }
    }
    return $listArray;
}
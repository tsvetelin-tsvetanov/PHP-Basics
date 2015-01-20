<?php
$log = $_GET['errorLog'];
$pattern =  "/Exception in thread \".*\" java.*\.(.*):.*\n.*?\.(.*?)\((.*?):(\d+)/";
preg_match_all($pattern, $log, $matches, PREG_SET_ORDER);

echo "<ul>";
foreach($matches as $match){
    $exception = $match[1];
    $method = $match[2];
    $filename = $match[3];
    $line = $match[4];
    echo "<li>line <strong>$line</strong> - <strong>$exception</strong> in <em>$filename:$method</em></li>";
}
echo "</ul>";
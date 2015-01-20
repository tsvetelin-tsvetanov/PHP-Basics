<?php
$input = $_GET['jsonTable'];

$numPattern = '/\[(\d+)/';
$timePattern = '/time=(\d+)/';

preg_match_all($timePattern, $input, $matches);
preg_match_all($numPattern, $input, $num);
//var_dump($matches[1]);

$num = ($num[1][0]);
$text = "";
for($i = 0; $i<count($matches[1]); $i++){
    $n = $matches[1][$i];
    $char = chr($matches[1][$i]);
    $text .= $char;
}

$spaceCheck = false;
echo "<table border='1' cellpadding='5'>";
for($i = 0, $k = 0; $i <= strlen($text);$i+=$num){
    echo "<tr>";
    for($j = 0; $j < $num; $j++, $k++) {
        if($spaceCheck == true){
            $k--;
        }
        if ($k >= strlen($text)) {
            echo "<td></td>";
        } else {
            $char = $text[$k];
            if($char == "*"){
                $spaceCheck = true;
            }
            if($spaceCheck == true){
                echo "<td></td>";
            }
            else{
                if($char == ' '){
                    echo "<td></td>";
                } else {
                    echo "<td style='background:#CAF'>" . htmlspecialchars($char) . "</td>";
                }
            }
        }
    }
    $spaceCheck = false;
    echo "</tr>";
}
echo "</table>";
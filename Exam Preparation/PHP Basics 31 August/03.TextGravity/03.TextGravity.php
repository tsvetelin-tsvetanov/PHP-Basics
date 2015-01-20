<?php
$text = $_GET['text'];
$lineLength = $_GET['lineLength'];
$letters = str_split($text, 1);

$lines = intval(strlen($text) / $lineLength) + (strlen($text % $lineLength == 0 ? 0 : 1));

$colIndex = 0;
$countRows = 0;
$result = [];
$line = [];

for($i = 0; $i < $lines * $lineLength; $i++){
    if($colIndex == $lineLength){
        $colIndex = 0;
        $result[$countRows] = $line;
        $countRows++;
    }
    if($i >= count($letters)){
        $line[$colIndex] = " ";
    } else {
        $line[$colIndex] = $letters[$i];
    }

    $colIndex++;
}

for($i = count($result) - 1; $i > 0; $i--){
    for($j = 0; $j < $lineLength; $j++){
        for($k = count($result) - 1; $k > 0; $k--) {
            $currentChar = $result[$k][$j];
            if ($currentChar == " ") {
                $result[$k][$j] = $result[$k - 1][$j];
                $result[$k - 1][$j] = " ";
            }
        }
    }
}
echo "<table>";
for ($row = 0; $row < count($result); $row++) {
    echo "<tr>";
    for ($col = 0; $col < count($result[$row]); $col++) {
        echo "<td>" . htmlspecialchars($result[$row][$col]) . "</td>";
    }
    echo "</tr>";
}
echo "<table>";
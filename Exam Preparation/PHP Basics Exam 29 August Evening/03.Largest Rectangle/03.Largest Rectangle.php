<?php
$json = $_GET['jsonTable'];
$data = json_decode($json);

for($i = 0; $i < count($data) - 1; $i++){
    for($j = 0; $j < count($data[0]) - 1; $j++){
        $currentChar = $data[$i][$j];
        if($data[$i][$j + 1] == $currentChar){
            $k = 0;
            while($data[$i][$j+$k] = $currentChar && ($j + $k) < count($data[0])){

                $l = 1;
                while($data[$i+$l][$j] == $data[$i+$l][$j+$k
                    && ($i + $j + 1)]){
                    if(isClosingRectangle($data, $i+$l, $j, $j+$k, $currentChar)){
                        echo 'rectangle found!';
                        echo ' row = '. $i;
                        echo ' col = '. $j;
                        echo ' end row ' .$l+$i;
                        echo ' end col ' .$j+$k;
                        echo '<br>';
                    }
                    $l++;
                }
            }
        }
    }
}

function isClosingRectangle($data, $row, $startCol, $endCol, $ch){

    for($i = $startCol; $i < $endCol; $i++){
        if($data[$row][$i] != $ch){
            return false;
        }
    }
}

//далече от истината
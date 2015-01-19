<?php
    //Doesn't load in the browser, only works with the console.
    $num = findDigits(1234);
    printResult($num);
    echo("<br> \n");

    $num = findDigits(145);
    printResult($num);
    echo("<br> \n");

    $num = findDigits(15);
    printResult($num);
    echo("<br> \n");

    $num = findDigits(1234);
    printResult($num);


function findDigits($num)
{
    $array = [];
    if ($num < 102) {
        return $array;
    }
    for($a = 1; $a < 10; $a++){
        for($b = 0; $b < 10; $b++){
            for($c = 0; $c < 10; $c++){
                if($a != $b && $a != $c && $b != $c){
                    $result = "${a}${b}${c}";
                    if ((int)$result <= $num) {
                        array_push($array, $result);
                    }
                }
            }
        }
    }
    return $array;
}

function printResult($digits) {
    if (count($digits) > 0) {
        echo implode(', ', $digits);
    } else {
        echo "no";
    }
}
?>
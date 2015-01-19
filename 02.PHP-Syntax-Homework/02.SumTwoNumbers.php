<?php
    $firstNumber = 2;
    $secondNumber = 5;
    $sum = $firstNumber + $secondNumber;
    $sum = number_format($sum, 2);
    echo('$firstNumber + $secondNumber = '.$firstNumber.' + '.$secondNumber.' = '.$sum);
    echo('<br>');

    $firstNumber = 1.567808;
    $secondNumber = 0.356;
    $sum = $firstNumber + $secondNumber;
    $sum = number_format($sum, 2);
    echo('$firstNumber + $secondNumber = '.$firstNumber.' + '.$secondNumber.' = '.$sum);
    echo('<br>');

    $firstNumber = 1234.5678;
    $secondNumber = 333;
    $sum = $firstNumber + $secondNumber;
    $sum = number_format($sum, 2);
    echo('$firstNumber + $secondNumber = '.$firstNumber.' + '.$secondNumber.' = '.$sum);
    echo('<br>');
?>
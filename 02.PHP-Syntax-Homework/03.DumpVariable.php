<?php
    $string = "hello";
    echo gettype($string);
    echo("<br>");

    $int = 15;
    var_dump($int);
    echo("<br>");

    $double = 1.2345;
    var_dump($double);
    echo("<br>");

    $array = array(1, 2, 3);
    echo gettype($array);
    echo("<br>");

    $object = (object)[2,34] ;
    echo gettype($object);
?>
<?php
function doubleWordsLetters($word){
    $double = '';

    for($i = 0; $i < strlen($word); $i++){
        $double .= $word[$i] . $word[$i];
    }
}

$text = htmlspecialchars($_GET['text']);
$word = '';
$result = '';
for($i = 0; $i < strlen($text); $i++){
    if(ctype_alpha($text[$i])){
        $word .= $text[$i];
    } else {
        if(ctype_upper($word)){
            $rev = strrev($word);

            if($rev == $word){
                doubleWordsLetters($rev);
            } else {
                $word = $rev;
            }
        }
        if($word != ''){
            $result .= $word;
            $word = '';
        }
        if(ord($text[$i]) == 10){
            $result .= "\n";
        }
        $result .= $text[$i];
    }
}

    $rev = strrev($word);

    if($rev == $word){
        doubleWordsLetters($rev);
    } else {
        $word = $rev;
    }
    $result .= $word;



echo '<p>' . $result . "</p>";
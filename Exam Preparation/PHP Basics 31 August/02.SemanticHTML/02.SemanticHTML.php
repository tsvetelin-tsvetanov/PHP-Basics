<?php
$input = $_GET['html'];
$semanticTags = ['main', 'header', 'nav', 'article', 'section', 'aside', 'footer'];

$firstPattern = "/<div .*?\b((id|class)\s*=\s*\"(.*?)\").*?>/";
preg_match_all($firstPattern, $input, $lines);

foreach($lines[0] as $key => $match){
    $name = $lines[1][$key];
    $value = $lines[3][$key];
    if(in_array($value, $semanticTags)){
        $replaceTag = str_replace('div', $value, $match);
        $replaceTag = str_replace($name, '', $replaceTag);
        $replaceTag = preg_replace('/\s*>/', '>', $replaceTag);
        $replaceTag = preg_replace('/\s{2,}/', '', $replaceTag);
        $input = str_replace($match, $replaceTag, $input);
    }
}

$secondPattern = '/<\/div>\s.*?(\w+)\s*-->/';
preg_match_all($secondPattern, $input, $secondLines);
foreach($secondLines[0] as $key => $match){
    $closingValue = $secondLines[1][$key];
    if(in_array($closingValue, $semanticTags)){
        $input = str_replace($match, "</$closingValue>", $input);
    }
}

echo $input;



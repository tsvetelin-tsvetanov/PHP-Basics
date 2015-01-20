<?php
$text = $_GET['text'];
$matches = preg_split("/\r?\n/", $text, -1, PREG_SPLIT_NO_EMPTY);

foreach($matches as $match){
    $post = trim($match);
    $attributes = explode(';', $post);
    //var_dump($attributes);
    $attributes[0] = trim($attributes[0]);
    $attributes[1] = trim($attributes[1]);
    $attributes[2] = trim($attributes[2]);
    $attributes[3] = trim($attributes[3]);
    $comments = explode("/", $attributes[4]);
    //var_dump($comments);
    echo "<article><header><span>".htmlspecialchars($attributes[0])."</span><time>".htmlspecialchars($attributes[1])."</time></header><main><p>".htmlspecialchars($attributes[2])."</p></main><footer><div class=\"likes\">".htmlspecialchars($attributes[3])." people like this</div>";
    if(count($comments) > 0){
        echo "<div class=\"comments\">";
        foreach($comments as $comment){
            $comment = trim($comment);
            $commentsPrint .= "<p>".htmlspecialchars($comment)."</p>";
        }

        echo $commentsPrint;
        $commentsPrint = "";
        echo "</div>";
    }
    $comments = "";
    echo "</footer></article>";
}
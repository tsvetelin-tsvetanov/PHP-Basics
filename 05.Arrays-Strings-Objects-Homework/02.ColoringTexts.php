<!DOCTYPE html>
<html>
<head>
    <title>02.Coloring Texts</title>
</head>
<body>
<form method="POST" action="02.ColoringTexts.php">
    <textarea rows="8" cols="60" name="input"></textarea>
    <br>
    <input type="submit" value="Color texts">
</form>
<br>
<?php
if (isset($_POST['input'])) {
    preg_match_all("/\S/", $_POST['input'], $matches);

    foreach($matches[0] as $letter){
        if(ord($letter) %2 != 0){
            echo "<span style='color: blue'>$letter</span>". ' ';
        } else {
            echo "<span style='color: red'>$letter</span>" . ' ';
        }
    }

    //интервалите след спановете ги няма по условие, добавям ги за прегледност
}

?>
</body>
</html>


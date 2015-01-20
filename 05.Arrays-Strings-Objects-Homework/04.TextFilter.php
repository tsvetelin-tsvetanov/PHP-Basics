<!DOCTYPE html>
<html>
<head>
    <title>04.Text filter</title>
</head>
<body>
<form method="POST" action="04.TextFilter.php">
    <textarea rows="8" cols="60" name="text"></textarea><br>
    <label for="banlist">Ban list: </label>
    <input type="text" name="banlist" id="banlist">
    <input type="submit">
</form>
<br>
<?php
if (isset($_POST['text'], $_POST['banlist'])) {
    $text = $_POST['text'];
    $banlist = explode(', ', $_POST['banlist']);

    foreach ($banlist as $banWord) {
        $replaceStr = str_repeat('*', strlen($banWord));
        $text = str_replace($banWord, $replaceStr, $text);
    }

    echo $text;
}
?>
</body>
</html>
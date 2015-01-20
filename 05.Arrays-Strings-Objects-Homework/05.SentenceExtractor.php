<!DOCTYPE html>
<html>
<head>
    <title>05.Text filter</title>
</head>
<body>
<form method="POST" action="05.SentenceExtractor.php">
    <textarea rows="8" cols="60" name="text"></textarea>
    <br>
    <label for="word">Word: </label>
    <input type="text" name="word" id="word">
    <input type="submit">
</form>
<br>
<?php
if (isset($_POST['text'], $_POST['word'])) {
    $countMatches = preg_match_all('/[^.!?]*[.!?]/', $_POST['text'], $sentences);
    $word =  $_POST['word'];

    foreach ($sentences[0] as $sentence) {
        $needle = "/[^\w]" . $word . "[^\w]/";
        if (preg_match($needle, $sentence) > 0) {
            $sentence = trim($sentence);
            echo "$sentence<br>";
        }
    }
}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>01.Word Mapping</title>
</head>
<body>
<form method="POST" action="01.WordMapping.php">
    <textarea rows="8" cols="60" name="input"></textarea>
    <br>
    <input type="submit" value="Count words">
</form>
    <br>
    <?php
    if(isset($_POST['input'])) {
        $words = preg_split("/[,.!? \/\()]+/", $_POST['input'], -1, PREG_SPLIT_NO_EMPTY);
        $wordsCount = array();

        foreach ($words as $word) {
            $wordToLowerCase = strtolower($word);
            if (!array_key_exists($wordToLowerCase, $wordsCount)) {
                $wordsCount[$wordToLowerCase] = 0;
            }
            $wordsCount[$wordToLowerCase]++;
        }
    }
    ?>
<table border="1" style="background-color: lightgrey">
    <?php foreach ($wordsCount as $key => $value): ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>


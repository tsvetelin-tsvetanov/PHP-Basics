<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Print tags</title>
</head>
<body>
<p>Enter Tags:</p>
<form method="get" action="02.MostFrequentTag.php">
    <input type="text" name="input" />
    <input type="submit" />
</form>

<?php
$print = array();

if (isset($_GET['input'])) {
    $tags = explode(', ', $_GET['input']);
    foreach ($tags as $key => $value) {
        if (!array_key_exists($value, $print)) {
            $print[$value] = 0;
        }
        $print[$value]++;
    }

    arsort($print);

    foreach ($print as $key => $value) {
        if ($value < 2) {
            echo $key . ' : ' . $value . ' time<br>';
        } else {
            echo $key . ' : ' . $value . ' times<br>';
        }
    }

    reset($print);
    $firstKey = key($print);
    echo "<p>Most Frequent Tag is: " . $firstKey . "</p>";
}
?>
</body>
</html>
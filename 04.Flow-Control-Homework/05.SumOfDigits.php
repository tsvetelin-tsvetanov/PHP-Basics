<!DOCTYPE html>
<html>
<head>
    <title>05.Sum Of Digits</title>
</head>
<body>
<form method="get" action="05.SumOfDigits.php">
    <label for="input">Input string: </label>
    <input type="text" name="input" id="input"/>
    <input type="submit">
</form>
<?php
if(isset($_GET["input"])):
$rows = explode(', ', $_GET["input"]);
?>
<table border="1px solid black">
    <?php
    foreach($rows as $element){
        if(is_numeric($element)){
            $sum = 0;
            $number = (string)$element;

            for ($i = 0; $i < strlen($number); $i++) {
                $sum += intval($number[$i]);
            }
            echo "<tr><td>$element</td><td>$sum</td></tr>";
        } else{
            echo "<tr><td>$element</td><td>I cannot sum that</td></tr>";
        }
    }
    ?>
</table>
<?php endif; ?>
</body>
</html>
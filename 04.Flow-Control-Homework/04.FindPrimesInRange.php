<!DOCTYPE html>
<html>
<head>
    <title>04.Find Primes In Range</title>
</head>
<body>
<form method="get" action="04.FindPrimesInRange.php">
    <label for="start">Starting index: </label>
    <input type="text" name="start" id="start"/>
    <label for="end">End: </label>
    <input type="text" name="end" id="end"/>
    <input type="submit"/>
</form>
<?php
if(isset($_GET["start"]) && isset($_GET["end"])):
    $start = $_GET["start"];
    $end = $_GET["end"];
    $isPrime = false;
    $count = 0;
    if ($start < 2 || $end < 2 || $start >= $end || !is_numeric($start) || !is_numeric($end)) {
        die('Error! Start index and End index must be numbers greater than 1 and Start
        index must be smaller than End index!');
    } else {
        for($i = $start; $i <= $end; $i++) {
            if ($count == 0 && ($i == 2 || $i == 3)) {
                echo "<b>$i</b>";
                $count++;
            } elseif ($count > 0 && ($i == 2 || $i == 3)) {
                echo ", <b>$i</b>";
            }  else {
            $isPrime = TRUE;
            for ($j=2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = FALSE;
                    break;
                }
            }
            if ($isPrime) {
                if ($count == 0) {
                    echo "<b>$i</b>";
                } else {
                    echo ", <b>$i</b>";
                }
            } else {
                if ($count == 0) {
                    echo "$i";
                } else {
                    echo ", $i";
                }
            }
        }
        $count++;
        }
    }
?>
<?php endif; ?>
</body>
</html>
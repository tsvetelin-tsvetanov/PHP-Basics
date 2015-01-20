<!DOCTYPE html>
<html>
<head>
    <title>06.Modify Strings</title>
</head>
<body>
<form method="post" action="06.ModifyString.php">
    <input type="text" name="input"/>
    <input type="radio" name="select" id="palindrome" value="palindrome"/>
    <label for="palindrome">Palindrome</label>
    <input type="radio" name="select" id="reverse" value="reverse"/>
    <label for="reverse">Reverse String</label>
    <input type="radio" name="select" id="split" value="split"/>
    <label for="split">Split</label>
    <input type="radio" name="select" id="hash" value="hash"/>
    <label for="hash">Hash String</label>
    <input type="radio" name="select" id="shuffle" value="shuffle"/>
    <label for="shuffle">Shuffle String</label>
    <input type="submit">
</form>
<br/>
<?php
if(isset($_POST["input"], $_POST["select"])) {
    $string = $_POST["input"];
    $action = $_POST["select"];

    switch ($action) {
        case "palindrome":
            $reversedStr = strrev($string);
            $isPal = TRUE;
            for ($i = 0; $i < strlen($string); $i++) {
                if ($reversedStr[$i] != $string[$i]) {
                    $isPal = FALSE;
                }
            }
            if ($isPal) {
                echo htmlspecialchars($string) . "is a palindrome!";
            } else {
                echo htmlspecialchars($string) . "is not a palindrome!";
            }
            break;
        case "reverse":
            echo htmlspecialchars(strrev($string));
            break;
        case "split":
            $string = str_split($string, 1);
            $string = implode(' ', $string);
            echo htmlspecialchars($string);
            break;
        case 'hash':
            echo crypt($string);
            break;
        case 'shuffle':
            echo htmlspecialchars(str_shuffle($string));
            break;
    }
}
?>
</body>
</html>
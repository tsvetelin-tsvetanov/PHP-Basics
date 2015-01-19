<!DOCTYPE html>
<html>
<head>
    <title>01.PrintTags</title>
</head>
<body>
<h5>Enter tags:</h5>
<form method="get" action="01.PrintTags.php">
    <input type="text" name="inputField"/>
    <input type="submit"/>
</form>
</body>
</html>
<?php
    if(isset($_GET["inputField"])){
        $tags = explode(', ', $_GET['inputField']);
        foreach($tags as $key => $value){
            echo"$key: $value <br>";
        }
    }
?>
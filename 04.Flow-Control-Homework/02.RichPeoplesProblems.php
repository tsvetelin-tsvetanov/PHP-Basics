<!DOCTYPE html>
<html>
<head>
    <title>02.Rich Peoples problems</title>
</head>
<body>
<form method="get" action="02.RichPeoplesProblems.php">
    <label for="input">Enter cars </label>
    <input type="text" id="input" name="input"/>
    <input type="submit" value="Show result"/>
</form>
<?php
    if(isset($_GET["input"])):
        $cars = explode(',', $_GET["input"]);
        $colors = array('white', 'black', 'red', 'blue', 'yellow', 'green', 'grey',
        'cyan', 'pink', 'orange', 'brown');

?>

<table border="1px solid black">
    <thead>
    <tr>
        <th>Car</th>
        <th>Color</th>
        <th>Count</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for($i = 0; $i < count($cars); $i++):
        $rndColor = rand(0, count($colors) - 1);
        $rndCount = rand(1, 10);

    ?>
    <tr>
        <td><?php echo htmlspecialchars($cars[$i]) ?></td>
        <td><?php echo $colors[$rndColor] ?></td>
        <td><?php echo $rndCount ?></td>
    </tr>
    <?php endfor; ?>
    </tbody>

</table>
<?php endif; ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>03.Show Annual Expenses</title>
</head>
<body>
<form method="get" action="03.ShowAnnualExpenses.php">
    <label for="input">Enter number of years</label>
    <input type="text" name="input" id="input"/>
    <input type="submit" value="Show costs"/>
</form>
<?php
if(isset($_GET["input"])):
    $years = $_GET["input"];
?>
<table border="1px solid black">
    <thead>
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for($i = 0; $i < $years; $i++):
        $jan = rand(0, 999);
        $feb = rand(0, 999);
        $mar = rand(0, 999);
        $apr = rand(0, 999);
        $may = rand(0, 999);
        $jun = rand(0, 999);
        $jul = rand(0, 999);
        $aug = rand(0, 999);
        $sep = rand(0, 999);
        $oct = rand(0, 999);
        $nov = rand(0, 999);
        $dec = rand(0, 999);
        $sum = $jan + $feb + $mar + $apr + $may + $jun + $jul + $aug + $sep + $oct +
            $nov + $dec;
        $year = 2014 - $i;
    ?>
        <tr>
            <td><?php echo $year?></php></td>
            <td><?php echo $jan ?></td>
            <td><?php echo $feb ?></td>
            <td><?php echo $mar ?></td>
            <td><?php echo $apr ?></td>
            <td><?php echo $may ?></td>
            <td><?php echo $jun ?></td>
            <td><?php echo $jul ?></td>
            <td><?php echo $aug ?></td>
            <td><?php echo $sep ?></td>
            <td><?php echo $oct ?></td>
            <td><?php echo $nov ?></td>
            <td><?php echo $dec ?></td>
            <td><?php echo $sum ?></td>
        </tr>
        <?php endfor; ?>
    </tbody>
</table>
<?php endif; ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>01.SquareRootSum</title>
</head>
<body>
    <table border="1px solid black">
        <thead>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
        </thead>
        <?php
            $sum = 0;
            for($i = 0; $i < 101; $i+=2):
                $num = $i;
                $square = sqrt($num);
                $sum += round($square, 2);
                ?>
                <tr>
                    <td><?php echo($num)?></td>
                    <td><?php echo(round($square, 2))?></td>
                </tr>
        <?php
            endfor;
        ?>
        <tr>
            <td><b>Total:</b></td>
            <td><?php echo(round($sum, 2)) ?></td>
        </tr>
    </table>
</body>
</html>



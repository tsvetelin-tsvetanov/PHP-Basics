<?php
    $name = 'Gosho';
    $phone = '0882-321-423';
    $age = 24;
    $address = 'Hadji Dimitar';

?>
<DOCTYPE html>
    <html>
    <head>
        <title>Information Table</title>
    </head>
    <body>
    <table border="1px solid black">
        <tr>
            <td>Name</td>
            <td><?= $name ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?= $phone ?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?= $age ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?= $address ?></td>
        </tr>
    </table>
    </body>
    </html>
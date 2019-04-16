<?php
include_once 'includes/pdo_connect.php';
include_once 'includes/pw_verify.php';

session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<h1>Välkommen till Din sida!</h1>
<table>
    <tr>
        <th>Här är dina bokade biljetter! Visa den här sidan vid biljettkontrollen! </th>
    </tr>
    <tr>
        <td><br>
        <?php 
        $stmt = $pdo->query("SELECT oi.OrderItemId, o.OrderId, c.CustomerName, c.CustomerId, p.productName FROM orders AS o 
        JOIN customers AS c ON c.CustomerId = o.CustomerId
        JOIN orderitems AS oi ON oi.OrderId = o.OrderId
        JOIN products AS p ON p.ProductId = oi.ProductId
        WHERE c.CustomerName = 'Carl' AND oi.OrderItemId = 32"); 
        $products = [];
        while ($row = $stmt->fetch()){
            echo 'Biljett nr:  ' . $row['OrderItemId'] . ',  ' . 'Resa:  ' . '"' . $row['productName'] . '"' . ',  ' . 'Kund nr:  ' . $row['CustomerId'] . ',  ' . 'Kundnamn:  ' . $row['CustomerName'] . '<br>' . '<br>';
            // var_dump($row);
            $products[] = $row;
            // var_dump($products);
        }
        ?>
        </td>
    </tr>
</table><br><br>
</table>
</body>
</html>
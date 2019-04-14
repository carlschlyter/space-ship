<?php
include 'includes/pdo_connect.php';

if (isset($_POST['Skicka'])) {
    //echo 'Skickat med formulär!';
    $OrderItemId = filter_input(INPUT_POST, 'OrderItemId', FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM orderitems WHERE OrderItemId = $OrderItemId";
    // echo $sql . '<br>'; //(Visa querien för att kolla varför inte formuläret fungerade)
    $stmt =$pdo->prepare($sql); 
    $stmt->execute();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Space Ship admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<h1>Space Ship Biljettkontroll</h1>
<table>
    <tr>
        <th>Giltiga biljetter</th>
    </tr>
    <tr>
        <td><br>
        <?php 
        $stmt = $pdo->query("SELECT oi.OrderItemId, ord.OrderId, p.productName, c.CustomerId, c.CustomerName 
        FROM space_ship.orderitems AS oi
        JOIN products AS p ON p.ProductId = oi.ProductId
        JOIN orders AS ord ON ord.OrderId = oi.OrderId  
        JOIN customers AS c ON c.CustomerId = ord.CustomerId"); 
        while ($row = $stmt->fetch()){
            echo 'Biljett nr:  ' . $row['OrderItemId'] . ',  ' . 'Resmål:  ' . '"' . $row['productName'] . '"' . ',  ' . 'Kund nr:  ' . $row['CustomerId'] . ',  ' . 'Kundnamn:  ' . $row['CustomerName'] . ',  ' . 'KundId:  ' . $row['CustomerId'] . '<br>' . '<br>';
            // var_dump($row);
            // var_dump($products);
        }
        ?>
        </td>
    </tr>
</table><br>
<p><i>Fyll i biljettnummer för att ta bort biljetten och göra den ogiltig:</i></p>
<form method="POST" action="admin.php">
        <input type="text" name="OrderItemId"><caption><i> Biljettnummer</i></caption><br><br>
        <input type="submit" name="Skicka" value="Ta bort biljett"><br>   
</form><br>
</html>
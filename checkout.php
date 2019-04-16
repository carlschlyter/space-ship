<?php
include 'includes/pdo_connect.php';
include_once 'includes/pw_verify.php';

$json = $_COOKIE['chosen_travels'];
// var_dump(json_decode($json, true));
$planets = json_decode($json, true);

foreach($planets as $planet => $planet_value){

    $OrderDate = date('Y-m-d');
    $CustomerId = 20;
    $OrderId = 33;
    $ProductId = $planet['ProductId'];  
    
    $sql = "INSERT INTO orders(OrderDate, CustomerId) VALUES('$OrderDate', '$CustomerId')";
    //echo $sql . '<br>'; //(Mickes grej för att kolla varför inte formuläret fungerade)
    $stmt =$pdo->prepare($sql); 
    $stmt->execute();
    
    $sql = "INSERT INTO orderitems(OrderId, ProductId) VALUES('$OrderId', '$ProductId')";
    //echo $sql . '<br>'; //(Mickes grej för att kolla varför inte formuläret fungerade)
    $stmt =$pdo->prepare($sql); 
    $stmt->execute();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<h2>Checkout - Nästan klart för take off till rymden!</h2> 
<table>
    <tr>
        <th>Mina valda resor</th>
    </tr>
    <tr>
        <td id="confirm_order"></td>
    </tr>
    <tr>
        <td>
            <?php foreach($planets as $planet => $planet_value){
                echo '<br>';
                echo $planet_value['productName'];
                echo '<br>';
            }  ?>
        </td>
    </tr>
</table><br>
<button onclick="window.location.href = 'index.php';">Hem</button>
<button onclick="window.location.href = 'mypage.php';">Genomför köp!</button> 
</body>
</html>
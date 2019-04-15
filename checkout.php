<?php
include 'includes/pdo_connect.php';
include_once 'includes/pw_verify.php';

$json = $_COOKIE['chosen_travels'];
// var_dump(json_decode($json));
// var_dump(json_decode($json, true));
$planets = json_decode($json, true);


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
<h4>Bekräfta ditt köp nedan!</h4>
<form method="POST" action="checkout.php">
        <input type="text" name="OrderDate"><caption><i> Orderdatum</i></caption><br><br>
        <input type="text" name="CustomerName"><caption><i> Kundnamn</i></caption><br><br>
        <input type="text" name="productName"><caption><i> Resa</i></caption><br><br>        
        <input type="submit" name="Skicka" value="Köp resa"><br>   
</form><br>
<button onclick="window.location.href = 'index.php';">Hem</button> 
</body>
</html>
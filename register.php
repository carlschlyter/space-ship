<?php
include 'includes/pdo_connect.php';

if (isset($_POST['Skicka'])) {
    //echo 'Skickat med formulär!';
    $customerName = filter_input(INPUT_POST, 'customerName', FILTER_SANITIZE_STRING);
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $passWord = filter_input(INPUT_POST, 'passWord', FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO customers(CustomerName, UserName, UserPassword) VALUES('$customerName', '$userName', '$passWord')";
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
    <title>Register account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<h2>Registrera ett konto för att boka en resa till rymden!</h2>
<p><i>Fyll i fälten för att skapa ett konto:</i></p>
<form method="POST" action="register.php">
        <input type="text" name="customerName"><caption><i> Namn</i></caption><br><br>
        <input type="text" name="userName"><caption><i> Användarnamn</i></caption><br><br>
        <input type="text" name="passWord"><caption><i> Lösenord</i></caption><br><br>
        <input type="submit" name="Skicka" value="Skapa konto"><br>   
</form><br>
<a href="checkout.php">Till Kassan!</a>    
</body>
</html>
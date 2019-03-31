<?php
$host = 'localhost';
$db = 'space_ship';
$user = 'root';
$pass = 'Carlphp2019';
$charset = 'utf8';

$dsn = "mysql:host=$host;
 dbname=$db;
 charset=$charset";

try {   
     $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(),(int)$e->getCode());
}

    // $sql = "INSERT INTO products(productName) VALUES('Planeten Jupiter - 14 apr 2031')";
    // //echo $sql . '<br>'; //(Mickes grej för att kolla varför inte formuläret fungerade)
    // $stmt =$pdo->prepare($sql); 
    // $stmt->execute(['productName' =>'Planeten Jupiter - 14 apr 2031']);
    // echo 'product added';

//     $stmt = $pdo->query("SELECT * FROM products");    
//     while ($row = $stmt->fetch()){
//     echo $row['CustomerId'] . " - " .  $row['CustomerName'] . '<br>';
// }

//     echo 'Hello Space Ship!';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Space Ship Start</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<h1>Boka en resa till rymden!</h1>
<h2>Välj resa:</h2>

<?php
    $stmt = $pdo->query("SELECT * FROM products");    

    while ($row = $stmt->fetch()){
    echo $row['productName'] . '<br>';
}
?>
    
</body>
</html>
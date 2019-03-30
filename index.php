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

// $sql = "INSERT INTO customers(customerName) VALUES('Calle')";
//     //echo $sql . '<br>'; //(Mickes grej för att kolla varför inte formuläret fungerade)
//     $stmt =$pdo->prepare($sql); 
//     $stmt->execute(['customerName' =>'Calle']);
//     echo 'customer added';

$stmt = $pdo->query("SELECT * FROM customers");
    
    while ($row = $stmt->fetch()){
    echo $row['CustomerId'] . " - " .  $row['CustomerName'] . '<br>';
}

//     echo 'Hello Space Ship!';
?>
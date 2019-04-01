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

$sql = "INSERT INTO products(productName) VALUES('Planeten Saturnus - 2 dec 2028')";
//echo $sql . '<br>'; //(Mickes grej för att kolla varför inte formuläret fungerade)
$stmt =$pdo->prepare($sql); 
$stmt->execute(['productName' =>'Planeten Saturnus - 2 dec 2028']);
echo 'product added';
?>
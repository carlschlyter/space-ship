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

$stmt = $pdo->query('SELECT * FROM customers');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['title'];
}

    echo 'Hello Space Ship!';
?>
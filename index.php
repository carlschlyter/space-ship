 <?php
// setcookie('x', 'y');

    // $sql = "INSERT INTO products(productName) VALUES('Planeten Uranus - 22 Feb 2025')";
    // //echo $sql . '<br>'; //(Mickes grej för att kolla varför inte formuläret fungerade)
    // $stmt =$pdo->prepare($sql); 
    // $stmt->execute(['productName' =>'Planeten Uranus - 22 Feb 2025']);
    // echo 'product added';

//     $stmt = $pdo->query("SELECT * FROM products");    
//     while ($row = $stmt->fetch()){
//     echo $row['CustomerId'] . " - " .  $row['CustomerName'] . '<br>';
// }

//     echo 'Hello Space Ship!';

include 'includes/pdo_connect.php';
// print_r($_COOKIE);
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

<table>
    <tr>
        <th>Aktuella resor</th>
    </tr>
    <tr>
        <td><br>
        <?php 
        $stmt = $pdo->query("SELECT * FROM products"); 
        $products = [];
        while ($row = $stmt->fetch()){
            echo $row['productName'] . '<input type="checkbox" id="journ_choice_' . $row['ProductId'] . '">' . '<br>';
            // var_dump($row);
            $products[] = $row;
            // var_dump($products);
        }
        ?>
        </td>
    </tr>
</table><br><br>
<table class='working_on'>
    <tr>
        <th>Mina valda resor</th>
    </tr>
    <tr>
        <td id="choosen_journ"></td>
    </tr>
    <tr>
        <td><textarea id="choosen_journ2" style="display:none;"><?php echo json_encode($products); ?></textarea></td>
    </tr>
</table> 
<?php
    // if (isset($_COOKIE['earth'])){
    //     echo 'earth';
    //     var_dump($_COOKIE['earth']);
    // }
?>
<button id ='book' href=>Boka</button>
<!-- <button id='btnsetckie'>Set cookie</button>
<button id="btnsetckiearr">Set cookie array</button> -->
</body>
</html>
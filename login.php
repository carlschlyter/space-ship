<?php

include_once 'includes/pdo_connect.php';
include_once 'includes/pw_verify.php';

if (isset($_POST['action'])){

    // $userName = 'Calle';

    $userName = $_POST['userName']; 
    $passWord = $_POST['passWord'];
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $passWord = filter_input(INPUT_POST, 'passWord', FILTER_SANITIZE_STRING);


    // echo "userName = $userName" . '<br>';
    // echo "passWord = $passWord";
    
    // $query = "SELECT * FROM users WHERE UserName = '?' AND PassWord = '?'";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$userName, $passWord]);

    // $query = "SELECT * FROM users WHERE UserName = :user AND PassWord = :pass";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([':user' => $userName, ':pass' =>$passWord]); 

    class User {
        private $db;
        public $is_logged_in = false;
    
        public function __construct() {
            $obj = new DB();
            $this->db = $obj->pdo;
        }
    
        public function login($userName, $passWord) {
            $stmt = $this->db->prepare("SELECT UserPassword FROM customers WHERE UserName = :user");
            $stmt->execute([':user'=> $userName]);
            $hash = $stmt->fetchColumn();
    
            $this->is_logged_in = password_verify($passWord, $hash); 

            if($this->is_logged_in) {
                $_SESSION['Logged in'] = true;
                $_SESSION['UserName'] = $userName;
                $_SESSION['PassWord'] = $passWord;
                // header("location: checkout.php");                
            } else {
                echo 'Not logged in';
            }

            return $this->is_logged_in;
        }
    }

    // print_r($_SESSION);

    // $user = new User();

    // if ($user->login($userName, $passWord)) {
    //     // header("location: checkout.php");
    //     echo "Logged in as: " . ($_SESSION['UserName']);
    // } else {
    //     echo "Not logged in";
    // }

    // print_r($_SESSION);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<h2>Logga in för att boka en resa till rymden!</h2>
    <p><i>Fyll i användarnamn och lösenord</i></p>
    <form method="POST">
            <input type="text" name="userName"><caption><i> Användarnamn</i></caption><br><br>
            <input type="password" name="passWord"><caption><i> Lösenord</i></caption><br><br>
            <input type="submit" name='action' value="Login">
    </form>    
    <p><i><a href="register.php">Registrera konto!</a></i></p>
    <p><i><a href="checkout.php">Till Checkout</a></i></p>

</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=crudpdo", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// $smt= $pdo->Query('SELECT * FROM  produtos');
// $produtos = $smt->fetchAll(PDO::FETCH_OBJ);

// if($produtos){
//     foreach ($produtos as $produto){
//         echo"<br> nome: $produto->nome "."<br>"." valor: $$produto->valor <br>";
// }
// }
?>
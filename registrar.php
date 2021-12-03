<?php


$servername = "localhost";
$username = "jeanpierre";
$password = "2200207476";
$dbname = "informacion";

$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['mail'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO datos (firstname, lastname, email)
    VALUES ('$nombre', '$apellido', '$correo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>REGISTRO EXITROSO
</h3>
<a href='index.html'>
    <button>REGRESAR AL INICIO
</button></a>

<a href='mostrartabla.php'>
  <button>VER LISTA
</a>
</body>
</html>
<?php

$servername = "localhost";
$username = "jeanpierre";
$password = "2200207476";
$dbname = "informacion";


/*Proceso de guardar informacion en el servidor y se muestre*/ 
$conex=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
$conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$jquery = "SELECT * FROM datos";
$obtenido = $conex->prepare($jquery);
$obtenido->execute();

$lista = array();


/* array asociativo */
while ($row = $obtenido->fetch(PDO::FETCH_ASSOC)){
    
   
    $lista ['Mostrando Usuarios ingresados']
    [] = $row;

}
echo json_encode($lista);


/*
//coneccion
$conexion = mysqli_connect($servername , $username, $password, $dbname) or die('No se pudo conectar a la base de datos');

$sql = 'SELECT * FROM datos';
$result = $conexion->query($sql);

echo "<table class='table table-bordered'>";
echo "<tr>";
echo "  <th> ID </th>";
echo "  <th> NOMBRE </th>";
echo "  <th> APELLIDO </th>";
echo "  <th> CORREO ELECTRÓNICO </th>";
echo "  <th> FECHA </th>";
echo "</tr>";
echo "</div>";

while($row=$result->fetch_array(MYSQLI_ASSOC)){
    echo "<tr>  <td>" .  $row["id"] ."</td> <td>" . $row["firstname"] . "</td> <td>" . $row["lastname"] . "</td> <td>". $row["email"] . "</td> <td>" . $row["reg_date"] . "</td> </tr>";
}
echo('</table>');

$result->free();*/

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
    <h3>MOSTRANDO LISTA
</h3>
<a href='index.html'>
    <button>REGRESAR AL INICIO
</button></a>
</body>
</html>

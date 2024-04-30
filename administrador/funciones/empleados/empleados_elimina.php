<?php
require "../conecta.php";    //Funciones de conexion a 
$con = conecta();

//Recibe variables
$id = $_POST['id'];  //Cachas id que quieres eliminar (Encvio de variables)

$sql = "UPDATE empleados SET eliminado = 1 WHERE id = $id"; //Eliminado Logico (Actualizacion a un registro)
//Campo Eliminado con una bandera, 
$res = $con->query($sql);
//filas afectadas
echo $con->affected_rows;
?>


<?php
//empleados_salva.php
require "../conecta.php";
$con = conecta();

//Recibe variables
$nombre     = $_POST['nombre'];
$correo     = $_POST['correo'];
$pass       = $_POST['contrasenia'];
$passEnc    = md5($pass);//METODO DE SEGURIDAD 


//Campos a salvar en la BD
$sql = "INSERT INTO clientes (nombre,correo, pass) VALUES ('$nombre','$correo', '$passEnc')";          //DECLARADO COMO VARCHAR 
$res = $con->query($sql);           //EJECUTA CONSULTA 


///pendiente la reedireccion
header("Location: ../../empleados_lista.php");
?>

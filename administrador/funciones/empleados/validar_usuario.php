<?php
session_start(); //cualquier docuemento que necesite usar sesion va a necesitar esta funcion

require "../conecta.php"; 
$con = conecta();

$user = $_POST["user"];
$pass = $_POST["pass"];
$enc_pass = md5($pass);

$peticion = "SELECT * FROM empleados WHERE correo='$user' AND pass='$enc_pass' AND eliminado=0";

$res = $con->query($peticion);
$num = $res->num_rows; //verifica que haya un registro
$row = $res->fetch_assoc(); //convierte en un arreglo para poder leer el campo

if($num == 1){
    $id = $row ["id"];
    $nombre = $row["nombre"].' '.$row["apellidos"];
    $correo = $row["correo"];
    //variables de sesion
    $_SESSION['id'] = $id;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['correo'] = $correo;
}
echo $num;
?>


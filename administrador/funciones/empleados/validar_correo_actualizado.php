<?php
require "../conecta.php";
$con = conecta();

$id     = $_POST["id"];
$correo = $_POST["correo"];

$peticion = "SELECT correo FROM empleados WHERE correo='$correo' AND id!=$id";

$res = $con->query($peticion);
if($res->fetch_array()){
    echo 1; // si hay un registro con ese correo, y no soy yo
}else {
    echo 0; // no hay registros con ese correo
}
?>
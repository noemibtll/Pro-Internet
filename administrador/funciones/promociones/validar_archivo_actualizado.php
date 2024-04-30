<?php
require "../conecta.php";
$con = conecta();

$id     = $_POST["id"];
$archivo = $_POST["nombre"];

$peticion = "SELECT nombre FROM promociones WHERE nombre='$nombre' AND id!=$id";

$res = $con->query($peticion);
if($res->fetch_array()) echo 1;
else echo 0;
?>

no te escucho :(
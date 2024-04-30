<?php
require "../conecta.php";
$con = conecta();

$codigo = $_POST["codigo"];
$peticion = "SELECT codigo FROM productos WHERE codigo='$codigo'";

$res = $con->query($peticion);
if($res->fetch_array()) echo 1;
else echo 0;
?>
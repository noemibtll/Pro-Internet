<?php
require "../conecta.php";
$con = conecta();

$id     = $_POST["id"];
$codigo = $_POST["codigo"];

$peticion = "SELECT codigo FROM productos WHERE codigo='$codigo' AND id!=$id";

$res = $con->query($peticion);
if($res->fetch_array()) echo 1;
else echo 0;
?>
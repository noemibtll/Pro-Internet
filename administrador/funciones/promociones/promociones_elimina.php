<?php
require "../conecta.php"; 
$con = conecta();

$id = $_POST['id'];
$sql = "UPDATE promociones SET eliminado = 1 WHERE id = $id";
$res = $con->query($sql);
echo $con->affected_rows;
?>
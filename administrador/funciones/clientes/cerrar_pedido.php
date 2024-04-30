<?php
require_once "../conecta.php";
$con = conecta();

$id_pedido = $_POST['id_pedido'];
$total = $_POST['total'];
$res = $con->query("UPDATE pedidos SET cerrado=1, total=$total WHERE id=$id_pedido");

if ($con->affected_rows) {
    return 0;
}
else return 1;
?>
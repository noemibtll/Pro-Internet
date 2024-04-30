<?php
require_once "../conecta.php";
require "../../validar_sesion.php";

$con = conecta();

$id_pedido = null;
$res = $con->query("SELECT * from pedidos WHERE cerrado = 0");
$row = $res->fetch_array();


if (empty($row)) {
    $con->query("INSERT INTO pedidos (id,total,cerrado) VALUES (0, 0, 0)");
    $id_pedido = $con->insert_id;
}
else $id_pedido = $row['id'];

$id_producto = $_POST['id_producto'];
$cantidad = $_POST['cantidad'];
$costo = 0;

$res = $con->query("SELECT costo FROM productos WHERE id=$id_producto");
$costo = $res->fetch_array()['costo'];

$res = $con->query("INSERT INTO pedido_producto (id_pedido, id_producto, costo, cantidad) VALUES ($id_pedido, $id_producto, $costo, $cantidad)");

return 0;
?>
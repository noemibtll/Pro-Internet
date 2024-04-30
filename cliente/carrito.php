<?php
include "./header.php";

$sql = "SELECT * FROM pedidos WHERE cerrado = 0";
$res = $con->query($sql);
$pedido = $res->fetch_array();

if (empty($pedido)) {
    header("Location:./index.php");
}

$id_pedido = $pedido['id'];

$sql = "SELECT pr.id, pr.nombre, pp.costo, pp.cantidad FROM productos as pr INNER JOIN pedido_producto AS pp ON pp.id_pedido = $id_pedido AND pr.id = pp.id_producto;";
$res = $con->query($sql);
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <script src="./js/cerrar_pedido.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-4 text-center">
            <table class="table table-hover table-sm mx-4">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">P/U</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody class="table table-hover">
                    <?php while ($row = $res->fetch_array()) { ?>
                        <tr class="table-primary  table-hover">
                            <td> <?php echo $row["id"] ?>       </td>
                            <td> <?php echo $row["nombre"] ?>   </td>
                            <td> $<?php echo $row["costo"] ?>   </td>
                            <td> <?php echo $row["cantidad"] ?> </td>
                            <td> $<?php echo ($row["costo"] * $row["cantidad"]); ?> </td>
                        </tr>
                        <?php $total += $row["costo"] * $row["cantidad"]; ?>
                    <?php } ?>

                    <tr class="table-primary  table-hover">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> $<?php echo $total ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-1">
                <button class="btn btn-outline-success" onclick="cerrar_pedido(<?php echo $pedido['id'] ?>, <?php echo $total ?>)">Enviar</button>
            </div>
        </div>
    </div>
</body>
<?php include "./footer.php"; ?>
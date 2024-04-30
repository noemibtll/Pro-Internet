<?php
include("menu.php");
require "./funciones/conecta.php";

$con = conecta();
$id = $_REQUEST['id'];
$sql = "SELECT pr.id, pr.nombre, pp.costo, pp.cantidad FROM productos as pr INNER JOIN pedido_producto AS pp ON pp.id_pedido = $id AND pr.id = pp.id_producto;";

$res = $con->query($sql);
$total = 0;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de pedido</title>
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
                        <?php $total += ($row["costo"] * $row["cantidad"]); ?>
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
            <a class="btn btn-outline-warning" href="./pedidos_lista.php">Regresar a Listado de pedidos</a><br>
        </div>
    </div>
</body>

</html>
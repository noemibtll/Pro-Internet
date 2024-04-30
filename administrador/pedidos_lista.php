<?php
include("menu.php");
require "./funciones/conecta.php";
$con = conecta();
//selecciona todos los campos de empleados
//muestra los que esten activos que es 1 y eliminados 0
$sql = "SELECT * FROM pedidos WHERE cerrado = 1";
$res = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla pedidos</title>    
</head>

<body>
    <div class="container text-center">
        <table class="table table-hover table-sm mt-4">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Detalle</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody class="table table-hover">
                <?php while ($row = $res->fetch_array()) { ?>
                    <tr class="table-primary  table-hover " id="<?php echo $row['id'] ?>">
                        <td> <?php echo $row["id"] ?> </td>
                        <td>
                            <a class="btn btn-outline-success" href="./pedidos_ver.php?id=<?php echo $row['id'] ?>">
                                Ver detalle
                            </a>
                        </td>
                        <td> <?php echo $row["total"] ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-outline-warning" href="./bienvenido.php">Regresar al menu de inicio</a>
        </div>
    </div>
</body>

</html>
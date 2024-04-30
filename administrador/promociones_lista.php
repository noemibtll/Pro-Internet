<?php
include("menu.php");
require "./funciones/conecta.php";
$con = conecta();
$sql = "SELECT * FROM promociones WHERE status = 1 AND eliminado = 0";
$res = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Promociones</title>
    <script src="./js/promociones_eliminar.js"></script>
</head>

<body><br><br>
    <table class="table table-hover table-sm">
        <thead class="table-secondary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Detalle</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody class="table table-hover">
            <?php while ($row = $res->fetch_array()) { ?>
                <tr class="table-primary  table-hover " id="<?php echo $row['id'] ?>">
                    <td>
                        <?php echo $row["id"] ?>
                    </td>
                    <td>
                        <?php echo $row["nombre"] ?>
                    </td>
                    <td>
                        <?php echo $row["archivo"] ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-success" href="./promociones_ver.php?id=<?php echo $row['id'] ?>"> Ver
                            detalle</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-info" href="./promociones_editar.php?id=<?php echo $row['id'] ?>"> Editar
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger"
                            onclick="eliminar(<?php echo $row['id'] ?>)">Eliminar
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-outline-success" href="./promociones_alta.php">Nuevo registro</a>
    </div>

</body>

</html>
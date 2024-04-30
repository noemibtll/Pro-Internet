<?php
include("menu.php");
require "./funciones/conecta.php";

$con = conecta();
$id = $_REQUEST['id'];
$sql = "SELECT * FROM empleados WHERE id=$id";

$res = $con->query($sql);
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de usuario</title>
</head>

<body>
    <br><br>
    <div class="row justify-content-center">
        <div class="card border-warning mb-3" style="max-width: 30rem;">
            <div class="card-header"><br>
                Empleado
            </div>
            <div class="row justify-content-center">
                <li class="list-group-item" style="max-width: 15rem;">
                    <img src="./imagenes/<?php echo $row['archivo'] ?>" class="card-img">
                </li>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nombre:
                    <?php echo $row["nombre"] ?>
                    <?php echo $row["apellidos"] ?>
                </li>
                <li class="list-group-item">Correo:
                    <?php echo $row["correo"] ?>
                </li>
                <li class="list-group-item">Rol:
                    <?php echo ($row["rol"] == 1) ? "Gerente" : "Ejecutivo" ?>
                </li>
                <li class="list-group-item">
                    Status:
                    <?php if ($row["status"] == 1) {
                        echo "Activo";
                    } else {
                        echo "Inactivo";
                    }
                    ?>
                </li>
            </ul><br>
            <a class="btn btn-outline-warning my-2" href="./empleados_lista.php">Regresar a Listado de empleados</a><br>
        </div>
    </div>

</body>

</html>
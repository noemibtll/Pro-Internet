<?php
include("menu.php");
require "./funciones/conecta.php";
$con = conecta();
$id = $_REQUEST['id'];

$sql = "SELECT * FROM empleados WHERE id=$id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar empleados</title>
    <script src="./js/editar_usuario.js"></script>
</head>

<body>
    <div class="container mt-3 text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <form name="formulario" action="./funciones/empleados/empleados_editar.php" method="POST"
                    onsubmit="return verificar_actualizacion()" enctype="multipart/form-data">
                    <h3>Editar empleados</h3>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                    <!-- NOMBRE Y APELLIDOS -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" class="form-control" name="nombre"
                                    value="<?php echo $row['nombre'] ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Apellidos</span>
                                <input type="text" class="form-control" name="apellidos"
                                    value="<?php echo $row['apellidos'] ?>">
                            </div>
                        </div>
                    </div>

                    <!-- CORREO -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Correo</span>
                            <input type="text" class="form-control" onblur="validar_correo_actualizado()" type="email"
                                name="correo" placeholder="@gmail.com" value="<?php echo $row['correo'] ?>">
                        </div>
                        <div class="column" id="correo_error" style="display:none;"></div>
                    </div>

                    <!-- ROL -->
                    <div>
                        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="rol">
                            <option value="0">Selecciona una opción</option>
                            <?php if ($row["rol"] == 1) { ?>
                                <option value="1" selected>Gerente</option>
                                <option value="2">Ejecutivo</option>
                            <?php } else { ?>
                                <option value="1">Gerente</option>
                                <option value="2" selected>Ejecutivo</option>
                            <?php } ?>
                        </select>
                    </div>

                    <!-- FOTO -->
                    <div class="col">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Agregar foto</label>
                            <input class="form-control" type="file" name="imagen" accept="image/png, image/jpg">
                        </div>
                    </div>

                    <!-- CONTRASEÑA -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">contraseña</span>
                            <input type="password" class="form-control" name="contrasenia">
                        </div>
                    </div>

                    <!-- BOTONES -->
                    <button class="btn btn-outline-success" type="submit">Enviar</button>
                    <a class="btn btn-outline-warning" href="./empleados_lista.php">Regresar a Listado de empleados</a>
                    <div class="alert alert-danger mt-2" role="alert" id="error_campos" style="display:none;">
                        Faltan campos por llenar!
                    </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>
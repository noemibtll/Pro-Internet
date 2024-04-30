<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta clientes</title>
    <script src="./js/registro_clientes.js"></script>
</head>

<body>
    <div class="container mt-3 text-center"><!-- Limitar contenido -->
        <div class="row justify-content-center">
            <div class="col-6">
                <form name="formulario" action="./funciones_cliente/clientes_salva.php" method="POST"
                    onsubmit="return verificar_clientes()" enctype="multipart/form-data">
                    <h3>Registro clientes</h3>
                    <!-- NOMBRE Y APELLIDOS -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                    </div>
                    <!-- CORREO -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Correo</span>
                            <input type="text" class="form-control" onblur="validar_correo_clientes()" type="email" name="correo"
                                placeholder="@udg.mx">
                        </div>
                        <div class="column alert alert-danger" role="alert" id="correo_error" style="display:none;"></div>
                    </div>

                    <!-- CONTRASEÑA -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">contraseña</span>
                            <input type="password" class="form-control" name="contrasenia">
                        </div>
                    </div>

                    <!-- BOTONES -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg" type="submit">Enviar</button>
                        <a class="btn btn-warning btn-lg" href="./empleados_lista.php">Regresar a Listado de
                            empleados</a>
                        <div class="alert alert-danger mt-2" role="alert" id="error_campos" style="display:none;">
                            Faltan campos por llenar!
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>
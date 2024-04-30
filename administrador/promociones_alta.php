<?php include("menu.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de promoción</title>
    <script src="./js/promociones_registro.js"></script>
</head>

<body>

    <div class="container mt-3 text-center"><!-- Limitar contenido -->
        <div class="row justify-content-center">
            <div class="col-6">
                <form name="formulario" action="./funciones/promociones/promociones_salva.php" method="POST" onsubmit="return verificar()" enctype="multipart/form-data">
                    <h3>Alta promociones</h3><br>
                    <!-- NOMBRE  -->

                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nombre o etiqueta</span>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </div>
                    <!-- IMAGEN -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" name="imagen" accept="image/png, image/jpg" placeholder="Agregar imagen">
                        </div>
                    </div>
                    <!-- BOTONES -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg" type="submit">Enviar</button>
                        <div class="alert alert-danger mt-2" role="alert" id="error_campos" style="display:none;">
                            Faltan campos por llenar!
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
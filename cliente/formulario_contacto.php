<?php include("header.php"); ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/diseño.css">
    <title>Formulario contacto</title>
    <script src="./js/verificar_campos_cliente.js"></script>
    <script src="./js/jquery-3.3.1.min.js"></script>
</head>
<div class="container mx-3 text-center">
    <div class="row justify-content-center">
        <div class="col-6">
            <form name="formulario" action="./correo.php" method="POST" onsubmit="return verificar_campos_cliente()">>
                <h3>Formulario contacto</h3>
                <!-- NOMBRE Y APELLIDOS -->
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nombre</span>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Apellidos</span>
                            <input type="text" class="form-control" name="apellidos">
                        </div>
                    </div>
                </div>
                <!-- CORREO -->
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Correo</span>
                        <input class="form-control" type="email" name="correo" placeholder="@gmail.com">
                    </div>
                    <div class="column" style="display:none;"></div>
                </div>
                <!-- AREA DE TEXTO -->
                <div class="col">
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="mensaje" rows="3"></textarea>
                    </div> <br>
                    <!-- BOTONES -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        <div class="alert alert-danger mt-2" role="alert" id="error_campos" style="display:none;">
                            Faltan campos por llenar!
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </form>
    <?php include("footer.php"); ?>
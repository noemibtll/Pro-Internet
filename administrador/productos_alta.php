<?php
include("menu.php");
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de producto</title>
    <script src="./js/producto_registro.js"></script>
</head>

<body>

<div class="container mt-3 text-center"><!-- Limitar contenido -->
        <div class="row justify-content-center">
            <div class="col-6">
            <form name="formulario" action="./funciones/productos_/productos_salva.php" method="POST"
                    onsubmit="return verificar()" enctype="multipart/form-data">
                    <h3>Alta productos</h3>
                    <!-- NOMBRE  -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Codigo</span>
                                <input type="text" class="form-control" name="codigo" onblur="validar_codigo()">
                            </div>
                        </div>
                        <div class="col" id="codigo_error" style="display:none;"></div>
                    </div>
                    <!-- DESCRIPCION -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Descripción</span>
                            <input type="text" class="form-control" name="descripcion"
                                placeholder="Escriba una descripcion del producto">
                        </div>

                    </div>
                    <!-- COSTO -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Costo</span>
                            <input type="number" class="form-control" name="costo" placeholder="$"  min="0" value=0>
                        </div>
                    </div>
                    <!-- STOCK -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Stock</span>
                            <input type="number" class="form-control" name="stock" min="0" value=0>
                        </div>
                    </div>

                    <!-- IMAGEN -->
                    <div class="col">
                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" name="imagen" accept="image/png, image/jpg"
                                placeholder="Agregar archivo">
                        </div>
                    </div>

                    <!-- BOTONES -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg" type="submit">Enviar</button>
                        <a class="btn btn-warning btn-lg" href="./productos_lista.php">Regresar a Listado de productos</a>
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
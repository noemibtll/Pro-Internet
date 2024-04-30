<?php
include("menu.php");
require "./funciones/conecta.php";
$con = conecta();
$id = $_REQUEST['id'];

$sql = "SELECT * FROM productos WHERE id=$id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar de producto</title>
    <script src="./js/producto_editar.js"></script>
</head>

<body>

<div class="container mt-3 text-center"><!-- Limitar contenido -->
        <div class="row justify-content-center">
            <div class="col-6">
            <form name="formulario" action="./funciones/productos/productos_editar.php" method="POST"
                    onsubmit="return verificar_actualizacion()" enctype="multipart/form-data">
                    <h3>Editar Producto</h3>
                    <!-- ID ESCONDIDO -->
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <!-- NOMBRE  -->
                    <div class="row">
                        <div class="col">
                            <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" class="form-control" name="nombre"
                                    value="<?php echo $row['nombre'] ?>">
                            </div>
                        </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Codigo</span>
                                <input type="text" class="form-control" name="codigo" onblur="validar_codigo_actualizado()" value="<?php echo $row['codigo'] ?>">
                            </div>
                        </div>
                        <div class="column" id="codigo_error" style="display:none;"></div>
                    </div>
                    <!-- DESCRIPCION -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Descripcion</span>
                            <input type="text" class="form-control" name="descripcion"
                                placeholder="Escriba una descripcion del producto"
                                value="<?php echo $row['descripcion'] ?>">
                        </div>

                    </div>
                    <!-- COSTO -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Costo</span>
                            <input type="number" class="form-control" name="costo" placeholder="$"  min="0"
                            value="<?php echo $row['costo'] ?>">
                        </div>
                    </div>
                    <!-- STOCK -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Stock</span>
                            <input type="number" class="form-control" name="stock" min="0"
                            value="<?php echo $row['stock'] ?>">
                        </div>
                    </div>

                    <!-- ARCHIVO_N -->
                    <div class="col">
                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" name="imagen" accept="image/png, image/jpg"
                                placeholder="Agregar archivo"
                                value="<?php echo $row['archivo_n'] ?>">
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
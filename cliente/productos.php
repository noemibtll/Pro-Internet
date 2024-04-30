<?php

include "./header.php";

$sql = "SELECT * FROM productos WHERE status = 1 AND eliminado = 0 AND stock > 0";
$productos = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <script src="./js/agregar_producto_pedido.js"></script>
</head>
<body><br><br>
    <div class="row my-1 text-center">
        <?php while ($row = $productos->fetch_array()) { ?>
            <div class="col md-3">
                <input value=<?php echo $row['id']; ?> id="id_producto" hidden/>
                <div class="card">
                    <img src="../administrador/imagenes/<?php echo $row['archivo'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
                        <p class="card-text"><?php echo $row['descripcion'] ?></p>
                        <a href="./producto_detalle.php?id=<?php echo $row['id'] ?>" class="btn btn-primary mb-1">Ver</a>
                        <div class="input-group">
                            <button class="btn btn-outline-warning <?php echo isset($_SESSION['id']) ? '' : 'btn-add-and-redirect'; ?>" onclick="agregar_producto(<?php echo $row['id']; ?>)">Añadir</button>
                            <input type="number" id="cantidad" class="form-control" min="1" max="<?php echo $row['stock']; ?>" value=1>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-outline-warning" href="./bienvenido.php">Regresar al menu de inicio</a>
    </div>
</body>
</html>
<?php include "./footer.php"; ?>
<?php
include "./header.php";

$sql = "SELECT * FROM promociones WHERE status = 1 AND eliminado = 0 ORDER BY RAND() LIMIT 1";
$res = $con->query($sql);
$promocion = $res->fetch_array();

$sql = "SELECT * FROM productos WHERE status = 1 AND eliminado = 0 ORDER BY RAND() LIMIT 3";
$productos = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <script src="./js/agregar_producto_pedido.js"></script>
</head>

<body class="mb-3">
    <div class="container">
        <!-- BANNER -->
        <div class="row text-center promocion mt-3">
            <img src="../administrador/imagenes/<?php echo $promocion['archivo'] ?>">
        </div>
        <!-- PRODUCTO -->
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
                                <button class="btn btn-outline-warning" onclick="agregar_producto()">Añadir</button>
                                <input type="number" id="cantidad" class="form-control" min="1" max="<?php echo $row['stock']; ?>" value=1>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

<?php include "./footer.php"; ?>
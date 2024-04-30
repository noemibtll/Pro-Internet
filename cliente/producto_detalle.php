<?php
include "./header.php";

$id = $_REQUEST['id'];
$sql = "SELECT * FROM productos WHERE id=$id";

$res = $con->query($sql);
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de producto</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center text-center mt-3">
            <div class="card border-warning mb-3">
                <input value=<?php echo $row['id']; ?> id="id_producto" hidden/>
                <div class="card-header"><br>
                    <h3><?php echo $row["nombre"] ?></h3>
                </div>
                <div class="row justify-content-center">
                    <li class="list-group-item" style="max-width: 15rem;">
                        <img src="../administrador/imagenes/<?php echo $row['archivo'] ?>" class="card-img">
                    </li>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        $ <?php echo $row["costo"] ?>
                    </li>
                    <li class="list-group-item">
                        Stock: <?php echo $row["stock"] ?>
                    </li>
                    <li class="list-group-item">
                    <div class="input-group">
                        <button class="btn btn-outline-success" onclick="agregar_producto()">Añadir al carrito</button>
                        <input id="cantidad" type="number" class="form-control" min="1" max="<?php echo $row['stock']; ?>" value=1>
                    </div>
                    </li>
                </ul><br>
                <a class="btn btn-outline-warning my-2" href="./index.php">Regresar</a>
            </div>
        </div>
    </div>
    <script src="./js/agregar_producto_pedido.js"></script>
</body>

</html>
<?php
session_start();
// si la sesión existe
if (empty($_SESSION['id'])) {
	header("location: ./index.php");
}

$nombre = $_SESSION["nombre"];
$correo = $_SESSION["correo"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/diseño.css">
	<title>Menu</title>
	<script src="./js/jquery-3.3.1.min.js"></script>
</head>

<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="./bienvenido.php">
					Bienvenido <span class="badge bg-primary"><?php echo $nombre ?></span>
				</a>
				<div class="row justify-content-center">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-link" href="./bienvenido.php">Inicio</a>
							<a class="nav-link" href="./empleados_lista.php">Empleados</a>
							<a class="nav-link" href="./productos_lista.php">Productos</a>
							<a class="nav-link" href="./promociones_lista.php">Promociones</a>
							<a class="nav-link" href="./pedidos_lista.php">Pedidos</a>
							<a class="nav-link" href="./funciones/empleados/cerrar_sesion.php">Cerrar Sesion</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</body>

</html>
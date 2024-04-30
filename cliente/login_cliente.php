<?php
session_start();

// si la sesión existe
if (!empty($_SESSION['id'])) {
    header("location: ./administrador/bienvenido.php");
}
?>

<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/diseño.css">
    <title>Login cliente</title>
    <script src="./js/verificar_clientes.js"></script>
    <script src="./js/jquery-3.3.1.min.js"></script>
</head>

<body class="login">
    <br><br><br>
    <div class="contenedor_login">
        <div class="container  mt-3 text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form name="login" onsubmit="return verificar_clientes()">
                        <h1 class="titulo-login">Inicia sesion</h1><br>
                        <div class="input-group mb-3">
                            <span class="col-form-label col-form-label-lg mt-4"></span>
                            <input type="email" class="form-control" name="user" placeholder="Ingrese correo">
                        </div>
                        <div class="input-group mb-3">
                            <span class="col-form-label col-form-label-lg mt-4"></span>
                            <input type="password" class="form-control" name="pass" placeholder="Ingrese contraseña">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    </form><br><br>
                    <div class="alert alert-danger mt-2" role="alert" id="error_usuario" style="display:none;"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
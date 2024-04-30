<?php
include("menu.php");
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>
    <div class="container mt-3 text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>Bienvenido al sistema de administración!</h1>
                <h3><span class="badge bg-secondary"><?php echo $nombre; ?></span></h3>
            </div>
        </div>
    </div>
</body>

</html>
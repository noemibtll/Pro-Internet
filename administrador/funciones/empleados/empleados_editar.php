<?php
require "../conecta.php";
$con = conecta();

//Recibe variables
$id         = $_POST['id'];
$nombre     = $_POST['nombre'];
$apellidos  = $_POST['apellidos'];
$correo     = $_POST['correo'];
$rol        = $_POST['rol'];
$pass       = $_POST['contrasenia'];
$archivo_n  = $_FILES['imagen']['name'];

//CAMPOS A ACTUALIZAR (DE LA BD)
$sql = "UPDATE empleados SET nombre='$nombre', apellidos='$apellidos', correo='$correo', rol=$rol";

//Cambio de contraseña
if (!empty($pass)) {
    $passEnc = md5($pass);// ENCRIPTAR CONTRASEÑA
    $sql = $sql.", pass='$passEnc'";
}

//Cambio de foto
if (!empty($archivo_n)) {
    $datos_foto = explode(".", $archivo_n); 
    $archivo    = md5($datos_foto[0]).".".$datos_foto[1]; //alksdjflkasdlfjabe345.png
    $sql = $sql.", archivo_n='$archivo_n', archivo='$archivo'";
    // Copiar imagen
    copy($_FILES['imagen']['tmp_name'], "../imagenes/$archivo");
}

$sql = $sql." WHERE id=$id";

$res = $con->query($sql);// EJECUTAR CONSULTA 
header("Location: ../../empleados_lista.php");
?>

<?php
require "../conecta.php";
$con = conecta();

//Recibe variables
$id     = $_POST['id'];
$nombre     = $_POST['nombre'];
$codigo     = $_POST['codigo'];
$descripcion= $_POST['descripcion'];
$costo      = $_POST['costo'];
$stock      = $_POST['stock'];
$archivo_n  = $_FILES['imagen']['name'];

//CAMPOS A ACTUALIZAR (DE LA BD)
$sql = "UPDATE productos SET nombre='$nombre', codigo='$codigo', costo='$costo', stock=$stock, descripcion='$descripcion'";

//Cambio de foto
if (!empty($archivo_n)) {
    $datos_foto = explode(".", $archivo_n); 
    $archivo    = md5($datos_foto[0]).".".$datos_foto[1]; //alksdjflkasdlfjabe345.png
    $sql = $sql.", archivo_n='$archivo_n', archivo='$archivo'";
    // Copiar imagen
    copy($_FILES['imagen']['tmp_name'], "../../imagenes/$archivo");
}

$sql = $sql." WHERE id=$id";

$res = $con->query($sql);// EJECUTAR CONSULTA 
header("Location: ../../productos_lista.php");
?>

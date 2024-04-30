<?php
require "../conecta.php";
$con = conecta();

$nombre     = $_POST['nombre'];
$codigo     = $_POST['codigo'];
$descripcion= $_POST['descripcion'];
$costo      = $_POST['costo'];
$stock      = $_POST['stock'];

//Imagen encriptada
$archivo_n  = $_FILES['imagen']['name'];
$datos_foto = explode(".", $archivo_n);
$archivo    = md5($datos_foto[0]).".".$datos_foto[1];

// Copiar imagen
copy($_FILES['imagen']['tmp_name'], "../../imagenes/$archivo");

//Campos a salvar en la BD
$sql = "INSERT INTO productos (nombre, codigo, descripcion, costo, stock, archivo_n, archivo) VALUES ('$nombre', '$codigo', '$descripcion', '$costo', '$stock','$archivo_n','$archivo')";          //DECLARADO COMO VARCHAR 
$res = $con->query($sql);

header("Location: ../../productos_lista.php");
?>

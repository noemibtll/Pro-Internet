<?php
//empleados_salva.php
require "../conecta.php";
$con = conecta();

//Recibe variables
$nombre     = $_POST['nombre'];

//Imagen encriptada
$archivo_n  = $_FILES['imagen']['name']; // felipe.png
$datos_foto = explode(".", $archivo_n); // ['felipe', 'png']
$archivo    = md5($datos_foto[0]).".".$datos_foto[1]; //alksdjflkasdlfjabe345.png

// Copiar imagen
copy($_FILES['imagen']['tmp_name'], "../../imagenes/$archivo");

//Campos a salvar en la BD
$sql = "INSERT INTO promociones (nombre, archivo_n, archivo) VALUES ('$nombre','$archivo_n','$archivo')";          //DECLARADO COMO VARCHAR 
$res = $con->query($sql);           //EJECUTA CONSULTA 

header("Location: ../../promociones_lista.php");
?>

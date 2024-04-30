<?php
if (!empty($_SESSION['id'])) {
    header("location: ./login_cliente.php");
}
?>
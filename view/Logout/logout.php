<?php
require_once("../../config/conexion.php");
$conexion = new conectar();  // Crear una instancia de la clase conectar
session_destroy();
header("Location:" . $conexion->ruta() . "index.php");
exit();
?>

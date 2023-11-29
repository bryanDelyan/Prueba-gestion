<?php 
require_once("../../config/conexion.php");
$conexion = new conectar();

if (isset($_SESSION["usuario_id"])) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php require_once("../mainHead/head.php");?>
    <?php require_once("../mainNav/nav.php");?>
    <?php require_once("../mainHeader/header.php");?>
    <title>Consultar ticket</title>
</head>
<body class="with-side-menu">

    <div class="mobile-menu-left-overlay"></div>

	<!-- Contenido -->
    <div class="page-content">
        <div class="container-fluid">
            Blank page.
        </div>
    </div>

    <?php require_once("../mainjs/js.php");?>
	<script type="text/javascript" src ="ticket.js"></script>
</body>
</html>
<?php
} else {
    header("Location:" . $conexion->ruta() . "index.php");
}
?>

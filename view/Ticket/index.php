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
    <title>Listar Solicitudes</title>
</head>
<body class="with-side-menu">

    <div class="mobile-menu-left-overlay"></div>

	<!-- Contenido -->
    <div class="page-content">
        <div class="container-fluid">
            <header class = "section-header">
            <div class="tbl">
            <div class="tbl-row">
            <div class="tbl-cell">
            <h3>Listar Solicitudes</h3>
            <ol class="breadcrumb breadcrumb-simple">
            <li><a href="../Home/index.php">Home</a></li>
            <li class="active">Listar Solicitudes</li>
            </ol>

        </div>
    </div>
 </div>

            </header>

            <div class="box-typical box-typical-padding">

            <table id="solicitud_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th style="width: 10%;"># Solicitud</th>
                        <th class = "d-none d-sm-table-cell" style="width: 25%;">Titulo</th>
                       
                        
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </div>
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

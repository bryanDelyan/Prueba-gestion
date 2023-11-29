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
    <title>Nueva solicitud</title>
</head>
<body class="with-side-menu">

    <div class="mobile-menu-left-overlay"></div>

	<!-- Contenido -->
    <div class="page-content">
        <div class="container-fluid">

        <h5 class="m-t-lg with-border">Registre su solicitud</h5>

<div class="row">
    <div class="col-lg-6">
        <fieldset class="form-group">
            <label class="form-label semibold" for="exampleInput">Titulo</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="">
            
        </fieldset>
    </div>
    <div class="col-lg-6">
        <fieldset class="form-group">
            <label class="form-label" for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
        </fieldset>
    </div>
    <div class="col-lg-12">
		<fieldset class="form-group">
		<label class="form-label semibold" for="tick_descrip">Descripción</label>
		<div class="summernote-theme-1" >
		<textarea class="summernote" id="soli" name="name"></textarea>
		</div>
		</div>
		</fieldset>
		</div>
        <button type="button" class="btn btn-inline btn-primary">Enviar</button>
    </div>
</div><!--.row-->



    </div>

    <?php require_once("../mainjs/js.php");?>
	<script type="text/javascript" src = "nuevoTicket.js"></script>
</body>
</html>
<?php
} else {
    header("Location:" . $conexion->ruta() . "index.php");
}
?>

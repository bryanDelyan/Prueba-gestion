<?php 
require_once("../../config/conexion.php");
$conexion = new conectar();

if (isset($_SESSION["usuario_id"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
                <form method="post" id="nueva_solicitud">

                    <input type="hidden" name="usuario_id" id="usuario_id" value="<?php echo $_SESSION["usuario_id"]; ?>">

                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="solicitud_titulo">Titulo</label>
                            <input type="text" class="form-control" id="solicitud_titulo" name="solicitud_titulo" placeholder="">
                        </fieldset>
                    </div>

                    <div class="col-lg-12">
                        <fieldset class="form-group">
                            <label class="form-label semibold" for="solicitud_descripcion">Descripción</label>
                            <div class="summernote-theme-1">
                                <textarea class="summernote" id="soli" name="solicitud_descripcion"></textarea>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-lg-6">
                        <button type="submit" name="action" value="add" class="btn btn-inline btn-primary">Enviar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <?php require_once("../mainjs/js.php");?>
    <script type="text/javascript" src="nuevoTicket.js"></script>
</body>
</html>

<?php
} else {
    header("Location:" . $conexion->ruta() . "index.php");
}
?>

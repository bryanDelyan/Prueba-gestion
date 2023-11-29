<?php
require_once("config/conexion.php");
if (isset($_POST["enviar"]) && $_POST["enviar"] == "si") {
    require_once("models/usuario.php");
    $usuario = new usuario();
    $usuario->login();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>

    <link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="img/favicon.png" rel="icon" type="image/png">
    <link href="img/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .page-center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .sign-box {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            max-width: 100%;
            text-align: center;
        }

        .sign-avatar img {
            max-width: 100px;
            border-radius: 50%;
        }

        .sign-title {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 25px;
        }

        .checkbox {
            margin-top: 10px;
        }

        .reset a {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-rounded {
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .sign-note {
            margin-top: 15px;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="page-center">
        <div class="page-center-in">
            <form class="sign-box" action="" method="post" id="login">
                <div class="sign-avatar">
                    <img src="public/img/avatar-sign.png" alt="Avatar">
                </div>
                <header class="sign-title">Iniciar sesión</header>

                    <?php

                        if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1";
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> Usuario y/o contraseña incorrectos.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                  </div>
                                <?php
                                break;
                                case "2";
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> Campos vacios.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                  </div>
                                <?php
                                break;
                            }
                        }

                    ?>
                <div class="form-group">
                    <input type="text" id="usuario_correo" name="usuario_correo" class="form-control" placeholder="Correo">
                </div>
                <div class="form-group">
                    <input type="password" id="usuario_contraseña" name="usuario_contraseña" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <div class="text-right reset">
                        <a href="reset-password.html">Olvidaste la contraseña ?</a>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded">Ingresar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="public/js/app.js"></script>
</body>

</html>

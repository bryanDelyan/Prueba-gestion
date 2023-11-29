<?php

    class usuario extends Conectar{

        public function login(){
            $conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usuario_correo"];
                $pass = $_POST["usuario_contraseña"];
                if(empty($correo) and empty($pass)){
                    header("Location:".conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM tm_usuario WHERE usuario_correo=? and usuario_contraseña=? and estado=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["usuario_id"] = $resultado["usuario_id"];
                        $_SESSION["usuario_nombre"] = $resultado["usuario_nombre"];
                        $_SESSION["usuario_apellido"] = $resultado["usuario_apellido"];
                      

                        header("Location:".Conectar::ruta()."view/Home/");
                        exit();

                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }

        }
    }

?>
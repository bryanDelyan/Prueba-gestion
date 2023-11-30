<?php

class solicitud extends Conectar {

    public function insertar_solicitud($usuario_id,$solicitud_titulo,$solicitud_descripcion)  {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_solicitud (solicitud_id, usuario_id, solicitud_titulo, solicitud_descripcion, estado) VALUES (NULL, ?, ?, ?, '1');";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario_id);
        $sql->bindValue(2, $solicitud_titulo);
        $sql->bindValue(3, $solicitud_descripcion);
        $sql->execute();
        return $resultado = $sql->fetchAll();

    }

    public function listar_solicitud($usuario_id)  {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT 
        tm_solicitud.solicitud_id,
        tm_solicitud.usuario_id,
        tm_solicitud.solicitud_titulo,
        tm_solicitud.solicitud_descripcion,
        tm_usuario.usuario_nombre,
        tm_usuario.usuario_apellido
        FROM
        tm_solicitud
        INNER JOIN tm_usuario on tm_solicitud.usuario_id = tm_usuario.usuario_id
        WHERE
        tm_solicitud.estado=1
        AND tm_usuario.usuario_id = ?";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    
    }

}

?>



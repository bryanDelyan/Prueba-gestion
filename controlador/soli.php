<?php
require_once("../config/conexion.php");
require_once("../models/solicitud.php");
$solicitud = new solicitud();

switch ($_GET["op"]) {
    case "insertar":
        $solicitud->insertar_solicitud($_POST["usuario_id"], $_POST["solicitud_titulo"], $_POST["solicitud_descripcion"]);
        break;

    case "listar":
        $datos = $solicitud->listar_solicitud($_POST["usuario_id"]);
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["solicitud_id"];
            $sub_array[] = $row["solicitud_titulo"];
            $sub_array[] = $row["solicitud_descripcion"];
            $sub_array[] = '<button type="button" onClick="ver(' . $row["solicitud_id"] . ');"  id="' . $row["solicitud_id"] . '" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);

        break;
}

?>

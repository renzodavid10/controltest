<?php
require_once('../../model/model_tarea.php');

$MT = new model_tarea();
$accion= htmlspecialchars($_POST['accion'], ENT_QUOTES, 'UTF-8');
$consulta=$MT->listar_tarea($accion);

if (count($consulta) > 0) {
    //echo 1;
    echo json_encode($consulta);
} else {
    echo '{
        "sEcho":1,
        "iTotalRecords":"0",
        "iTotalDisplayRecords":"0",
        "aaData":[]
    }';
}

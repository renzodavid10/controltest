<?php
require_once('../../model/model_tarea.php');

$MT = new model_tarea();
$consulta=$MT->listar_tarea();

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

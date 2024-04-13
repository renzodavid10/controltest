<?php
session_start();

require_once('../../model/model_tarea.php');

$MT = new model_tarea();
$accion = htmlspecialchars($_POST['accion'], ENT_QUOTES, 'UTF-8');
date_default_timezone_set("America/Lima");
$fechahoy = date('Y-m-d');
if (isset($_POST['dni'])) {
    $dni =  $_SESSION['S_DNI_PT'];
    $consulta = $MT->listar_tarea($accion, $fechahoy, $dni);
} else {
    $consulta = $MT->listar_tarea($accion, $fechahoy);
}
//$dni= htmlspecialchars($_POST['dni'], ENT_QUOTES, 'UTF-8');



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

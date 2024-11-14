<?php
session_start();
require_once '../../model/model_cuestionario.php';

$ME = new mode_cuestionario();
$cues_id = htmlspecialchars($_POST['cues_id'], ENT_QUOTES, 'UTF-8');
$dni= $_SESSION['S_DNI_PT'];

date_default_timezone_set("America/Lima");
$fechahoy = date('Y-m-d');
$resultado = $ME->listar_cuestionario($cues_id,$dni,$fechahoy);
if (count($resultado) > 0) {
    echo json_encode($resultado);
} else {
    echo '{
        "sEcho": 1,
        "iTotalRecords":"0",
        "iTotalDisplayRecords":"0",
        "aaData":[]
    }';
}

//echo var_dump(json_encode($resultado));

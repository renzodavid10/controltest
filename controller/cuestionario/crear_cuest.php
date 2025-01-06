<?php
session_start();
require_once '../../model/model_cuestionario.php';

$MT = new mode_cuestionario();


$dni = $_SESSION['S_DNI_PT'];


$cuesId =  htmlspecialchars($_POST['cues_id'], ENT_QUOTES, 'UTF-8');
date_default_timezone_set("America/Lima");

if ($cuesId == 1) {
    $fecha = date('Y-m-d');
    $consultar = $MT->crear_cuestionario($dni, $fecha, $cuesId);
    echo $consultar;
} elseif ($cuesId == 2) {
    $fecha = date('Y-m-d');
    if (date('w') == 1) {
        $consultar = $MT->crear_cuestionario($dni, $fecha, $cuesId);
        echo $consultar;
    }
} elseif ($cuesId == 3) {
    $fecha = date('Y-m-d');
    $consultar = $MT->crear_cuestionario($dni, $fecha, $cuesId);
    echo $consultar;
} else {
    echo 0;
}

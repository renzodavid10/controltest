<?php
session_start();
require_once '../../model//model_tarea.php';

$MT = new model_tarea();
$accion = htmlspecialchars($_POST['tipo'], ENT_QUOTES, 'UTF-8');
if (isset($_POST['dni'])) {
    $dni =  $_SESSION['S_DNI_PT'];
    $resultado = $MT->contador($accion, $dni);
} else {

    $resultado = $MT->contador($accion);
}

echo $resultado;

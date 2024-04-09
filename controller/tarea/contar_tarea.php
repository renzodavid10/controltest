<?php
require_once '../../model//model_tarea.php';

$MT = new model_tarea();
$accion = htmlspecialchars($_POST['tipo'], ENT_QUOTES, 'UTF-8');
$resultado = $MT->contador($accion);

echo $resultado;

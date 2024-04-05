<?php 
require_once '../../model//model_tarea.php';

$MT= new model_tarea();
$accion='No iniciada';
$resultado=$MT->contador($accion);

return $resultado;
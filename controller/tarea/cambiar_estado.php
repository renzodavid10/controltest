<?php
require_once '../../model/model_tarea.php';
$MT= new model_tarea;
$id =  htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');
$estado =  htmlspecialchars($_POST['estado'], ENT_QUOTES, 'UTF-8');

$resultado=$MT->cambiar_estado($id,$estado);

echo $resultado;
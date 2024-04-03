<?php

require_once '../../model/model_usuario.php';

$MU = new model_usuario();
$usu = htmlspecialchars($_POST['u'], ENT_QUOTES, 'UTF-8'); // ENT:QUOTE .. para saltar codigo o innyecciones js
$pass = htmlspecialchars($_POST['p'], ENT_QUOTES, 'UTF-8');

$consultar = $MU->verificar_user($usu,$pass);
//echo json_encode($consultar);
if (count($consultar) > 0) {
    echo json_encode($consultar);
} else {
    echo 0;
}

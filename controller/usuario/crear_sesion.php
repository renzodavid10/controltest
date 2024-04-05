<?php
session_start();
// Recibimos el JSON enviado en la solicitud AJAX
$json = file_get_contents('php://input');
// Decodificamos el JSON a un arreglo de PHP
$datos = json_decode($json, true);
// $datos ahora contiene el arreglo enviado desde JavaScript
print_r($datos);
foreach ($datos as $dato) {

    $_SESSION['S_IDUSUARIO'] = $dato[0];
    $_SESSION['S_DNI_PT'] = $dato[5];
    $_SESSION['S_USUARIO'] = $dato[4];
    $_SESSION['S_ROL_PT'] = $dato[11];
    $_SESSION['S_APEPAT_PT'] = $dato[2];
    $_SESSION['S_APEMAT_PT'] = $dato[3];
    $_SESSION['S_NOMBRE'] = $dato[1];
    $_SESSION['S_PASS_PT'] = $dato[8];
    $_SESSION['S_EMPRE'] = $dato['usua_empr'];
}

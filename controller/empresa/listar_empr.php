<?php

require_once '../../model/model_empresa.php';

$ME = new model_empre();
$resultado = $ME->listar_empresa();
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

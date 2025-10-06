<?php
require 'exportar_datos.php';

$data = json_decode(file_get_contents('php://input'), true);
// Acceder a los parámetros enviados
$fecha1 = isset($data['fecha1']) ? $data['fecha1'] : null;
$fecha2 = isset($data['fecha2']) ? $data['fecha2'] : null;
$probando = new generar_excel;
echo $probando->llamado($fecha1,$fecha2);

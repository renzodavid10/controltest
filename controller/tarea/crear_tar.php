<?php
session_start();
require_once('../../model/model_tarea.php');

$MT = new model_tarea();

$desc =  htmlspecialchars($_POST['desc'], ENT_QUOTES, 'UTF-8');
$crit = "URGE";
$responsable =  htmlspecialchars($_POST['responsable'], ENT_QUOTES, 'UTF-8');
$departa =  htmlspecialchars($_POST['departa'], ENT_QUOTES, 'UTF-8');
$elemento =    htmlspecialchars($_POST['elemento'], ENT_QUOTES, 'UTF-8');
$fecha =    htmlspecialchars($_POST['fecha'], ENT_QUOTES, 'UTF-8');
$usu_dni = $_SESSION['S_DNI_PT'];
$orig = $_SESSION['S_EMPRE'];

$consultar = $MT->crear_tarea($desc, $crit, $responsable, $departa, $orig, $usu_dni, $fecha);
//echo $orig;
echo $consultar;

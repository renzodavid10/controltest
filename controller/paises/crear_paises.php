<?php

session_start();
require_once('../../model/model_pais.php');

$MT = new model_pais();

$nombre =    htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
$dni =    htmlspecialchars($_POST['dni'], ENT_QUOTES, 'UTF-8');

$consultar = $MT->crear_pais($nombre, $dni);
//echo $orig;
echo $consultar;


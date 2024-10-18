<?php 
session_start();
require_once '../../model/model_cuestionario.php';

$MU = new mode_cuestionario(); //Instaciamos
$dni = $_SESSION['S_DNI_PT'];
$fecha= htmlspecialchars($_POST['fecha'], ENT_QUOTES, 'UTF-8');
$respid= htmlspecialchars($_POST['respid'], ENT_QUOTES, 'UTF-8');
$cue1= htmlspecialchars($_POST['cue1'], ENT_QUOTES, 'UTF-8');
$cue2= htmlspecialchars($_POST['cue2'], ENT_QUOTES, 'UTF-8');
$cue3= htmlspecialchars($_POST['cue3'], ENT_QUOTES, 'UTF-8');
$cue4= htmlspecialchars($_POST['cue4'], ENT_QUOTES, 'UTF-8');
$cue5= htmlspecialchars($_POST['cue5'], ENT_QUOTES, 'UTF-8');
$cue6= htmlspecialchars($_POST['cue6'], ENT_QUOTES, 'UTF-8');
$cue7= htmlspecialchars($_POST['cue7'], ENT_QUOTES, 'UTF-8');
$cue8= htmlspecialchars($_POST['cue8'], ENT_QUOTES, 'UTF-8');
$cue9= htmlspecialchars($_POST['cue9'], ENT_QUOTES, 'UTF-8');
$cue10= htmlspecialchars($_POST['cue10'], ENT_QUOTES, 'UTF-8');
$cue11= htmlspecialchars($_POST['cue11'], ENT_QUOTES, 'UTF-8');
$cue12= htmlspecialchars($_POST['cue12'], ENT_QUOTES, 'UTF-8');
$cue13= htmlspecialchars($_POST['cue13'], ENT_QUOTES, 'UTF-8');
$cue14= htmlspecialchars($_POST['cue14'], ENT_QUOTES, 'UTF-8');
$area= htmlspecialchars($_POST['area'], ENT_QUOTES, 'UTF-8');
$subarea = htmlspecialchars($_POST['subarea'], ENT_QUOTES, 'UTF-8');


$consultar = $MU->responder_cuestionario(
    $dni,
    $fecha,
    $respid,
    $cue1,
    $cue2,
    $cue3,
    $cue4,
    $cue5,
    $cue6,
    $cue7,
    $cue8,
    $cue9,
    $cue10,
    $cue11,
    $cue12,
    $cue13,
    $cue14,
    $area,
    $subarea
);

echo $consultar;


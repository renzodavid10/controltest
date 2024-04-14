<?php
session_start();
require_once '../../model/model_comentario.php';
$MC = new mode_comentario;
$come_come =  $_POST['coment'];
$tar_id= htmlspecialchars($_POST['id_tare'], ENT_QUOTES, 'UTF-8');
$usua_dni=$_SESSION['S_DNI_PT'];
date_default_timezone_set("America/Lima");
$fechahoy = date('Y-m-d');
$come_hora = date('H:i:s');
$meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Agos", "Sep", "Oct", "Nov", "Dic");
$fecha_chat=date('d ').$meses[date('n')-1].date(' G:i ').date('a');

$resultado=$MC->agregar_coment($tar_id,$usua_dni,$come_come,$fechahoy,$come_hora,$fecha_chat);
echo $resultado;

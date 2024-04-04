<?php 
require_once '../../model/model_usuario.php';

$MU = new model_usuario(); //Instaciamos
$usu_dni =  htmlspecialchars($_POST['dni'], ENT_QUOTES, 'UTF-8');
$usu_name =  mb_strtoupper(htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'));
$usu_apap = mb_strtoupper(htmlspecialchars($_POST['ap_p'], ENT_QUOTES, 'UTF-8'));
$usu_apam =  mb_strtoupper(htmlspecialchars($_POST['ap_m'], ENT_QUOTES, 'UTF-8'));
$usu_pass =  password_hash($_POST['pass'], PASSWORD_DEFAULT, ['cost' => 12]);;
$usu_corr =  mb_strtoupper(htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'));
$usu_celu =  htmlspecialchars($_POST['cel'], ENT_QUOTES, 'UTF-8');
$usu_empr =  htmlspecialchars($_POST['empresa'], ENT_QUOTES, 'UTF-8');
$usu_foto='';
$consultar = $MU->create_user($usu_name,$usu_apap,$usu_apam,$usu_dni,$usu_celu,$usu_corr,$usu_pass,$usu_foto,$usu_empr);
echo $consultar;

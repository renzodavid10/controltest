<?php require_once '../../model/model_usuario.php';

$MU= new model_usuario(); //Instaciamos
$usu_nombre =  htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
$consultar=$MU->listar_usuario($usu_nombre);


//echo $consultar;

if(count($consultar)>0){
   echo json_encode($consultar);
}else{
   echo '{
       "sEcho": 1,
       "iTotalRecords":"0",
       "iTotalDisplayRecords":"0",
       "aaData":[]
   }';
}
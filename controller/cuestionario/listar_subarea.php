<?php require_once '../../model/model_cuestionario.php';

$MU= new mode_cuestionario(); //Instaciamos
$areaid = htmlspecialchars($_POST['areaid'], ENT_QUOTES, 'UTF-8');

$consultar=$MU->listar_subarea($areaid);

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
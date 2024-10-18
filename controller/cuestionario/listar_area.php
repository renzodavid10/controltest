<?php require_once '../../model/model_cuestionario.php';

$MU= new mode_cuestionario(); //Instaciamos

$consultar=$MU->listar_area();

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
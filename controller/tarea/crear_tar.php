<?php

require_once('../../model/model_tarea.php'); 

$MT= new model_tarea();

$dni =  htmlspecialchars($_POST['dni'], ENT_QUOTES, 'UTF-8');
$responsable =  mb_strtoupper(htmlspecialchars($_POST['responsable'], ENT_QUOTES, 'UTF-8'));
$departa = mb_strtoupper(htmlspecialchars($_POST['departa'], ENT_QUOTES, 'UTF-8'));
$elemento =  mb_strtoupper(htmlspecialchars($_POST['elemento'], ENT_QUOTES, 'UTF-8'));
$fecha =  mb_strtoupper(htmlspecialchars($_POST['fecha'], ENT_QUOTES, 'UTF-8'));

$MT->crear_tarea();
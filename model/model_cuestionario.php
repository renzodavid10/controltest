<?php
require_once 'conexion.php';

class mode_cuestionario extends conexion_nueva
{

    function listar_cuestionario($cues_id,$dni)
    {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_listar_preguntas(?,?)";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $cues_id);
        $query->bindParam(2, $dni);

        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $resu) {
            $arreglo["data"][] = $resu;
        }
        return $arreglo;

        conexion_nueva::cerrar_conexion();
    }
}

/*$Probando = new mode_cuestionario;
echo '<br>';
var_dump(json_encode($Probando->listar_cuestionario('1')));*/


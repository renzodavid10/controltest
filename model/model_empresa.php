<?php
require_once 'conexion.php';

class model_empre extends conexion_nueva{

    function listar_empresa(){
        $c=conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_listar_empresa()";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->execute();

        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $resu) {
            $arreglo[] = $resu;
        }
        return $arreglo;

        conexion_nueva::cerrar_conexion();

    }
}
<?php
require_once 'conexion.php';

class mode_cuestionario extends conexion_nueva
{

    function listar_cuestionario($cues_id, $dni,$fechahoy)
    {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_listar_preguntas(?,?,?)";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $cues_id);
        $query->bindParam(2, $dni);
        $query->bindParam(3, $fechahoy);

        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $resu) {
            $arreglo["data"][] = $resu;
        }
        return $arreglo;

        conexion_nueva::cerrar_conexion();
    }
    function crear_cuestionario($dni, $fecha, $cuesId)
    {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  public.fn_crear_cuestionario(?,?,?)";

        $query = $c->prepare($sql);
        $query->bindParam(1, $dni);
        $query->bindParam(2, $fecha);
        $query->bindParam(3, $cuesId);
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }

        conexion_nueva::cerrar_conexion();
    }
    function listar_area()
    {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_listar_area()";

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
    function listar_subarea($areaid)
    {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_listar_subarea(?)";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $areaid);

        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $resu) {
            $arreglo[] = $resu;
        }
        return $arreglo;

        conexion_nueva::cerrar_conexion();
    }

    function responder_cuestionario(
        $dni,
        $fecha,
        $respid,
        $cue1='',
        $cue2='',
        $cue3='',
        $cue4='',
        $cue5='',
        $cue6='',
        $cue7='',
        $cue8='',
        $cue9='',
        $cue10='',
        $cue11='',
        $cue12='',
        $cue13='',
        $cue14='',
        $area,
        $subarea
    ) {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_responder_cuestionario(? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?,?,?,?,?) ";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $dni);
        $query->bindParam(2, $fecha);
        $query->bindParam(3, $respid);
        $query->bindParam(4, $cue1);
        $query->bindParam(5, $cue2);
        $query->bindParam(6, $cue3);
        $query->bindParam(7, $cue4);
        $query->bindParam(8, $cue5);
        $query->bindParam(9, $cue6);
        $query->bindParam(10, $cue7);
        $query->bindParam(11, $cue8);
        $query->bindParam(12, $cue9);
        $query->bindParam(13, $cue10);
        $query->bindParam(14, $cue11);
        $query->bindParam(15, $cue12);
        $query->bindParam(16, $cue13);
        $query->bindParam(17, $cue14);
        $query->bindParam(18, $area);
        $query->bindParam(19, $subarea);
        $query->bindParam(20, $subarea);
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }

        conexion_nueva::cerrar_conexion();
    }
    function listar_reporte_cues($fecha1,$fecha2)
    {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_reporte_preguntas(?,?)";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $fecha1);
        $query->bindParam(2, $fecha2);
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
var_dump(json_encode($Probando->crear_cuestionario('73748713','2024-10-08',1)));*/

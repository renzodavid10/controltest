<?php
require_once 'conexion.php';

class mode_comentario extends conexion_nueva
{

    public function agregar_coment($tar_id, $usua_dni, $come_come, $come_fecha, $come_hora,$fecha_chat)
    {
        $c = conexion_nueva::conectarBD();
        $sql = 'SELECT * from fn_agregar_comentario(?,?,?,?,?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $tar_id);
        $query->bindParam(2, $usua_dni);
        $query->bindParam(3, $come_come);
        $query->bindParam(4, $come_fecha);
        $query->bindParam(5, $come_hora);
        $query->bindParam(6, $fecha_chat);
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }
        conexion_nueva::cerrar_conexion();
    }
    function listar_comentario($tar_id)
    {
        //$tarid=5;
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM  fn_listar_comentario(?)";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $tar_id);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $resu) {
            $arreglo[] = $resu;
        }
        return $arreglo;

        conexion_nueva::cerrar_conexion();
    }
}

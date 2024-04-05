<?php

require_once 'conexion.php';

class model_tarea extends conexion_nueva
{

    public function crear_tarea($desc, $crit, $respon, $dep, $orig, $usu_dni, $tiempo)
    {
        $c = conexion_nueva::conectarBD();
        $sql = 'SELECT * from fn_ingresar_tarea(?,?,?,?,?,?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $desc);
        $query->bindParam(2, $crit);
        $query->bindParam(3, $respon);
        $query->bindParam(4, $dep);
        $query->bindParam(5, $orig);
        $query->bindParam(6, $usu_dni);
        $query->bindParam(7, $tiempo);
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }

        conexion_nueva::cerrar_conexion();
    }
    function listar_tarea()
    {
        $c = conexion_nueva::conectarBD();

        $sql = "SELECT * FROM  fn_listar_tareas()";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->execute();

        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $resu) {
            $arreglo["data"][] = $resu;
        }
        return $arreglo;

        conexion_nueva::cerrar_conexion();
    }
    public function contador($accion)
    {
        $c = conexion_nueva::conectarBD();
        $sql = 'SELECT * from fn_ingresar_tarea(?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $accion);
        
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }

        conexion_nueva::cerrar_conexion();
    }
}

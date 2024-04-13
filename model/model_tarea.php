<?php

require_once 'conexion.php';

class model_tarea extends conexion_nueva
{

    public function crear_tarea($desc, $crit, $respon, $dep, $orig, $usu_dni, $tiempo, $tcrea)
    {
        $c = conexion_nueva::conectarBD();
        $sql = 'SELECT * from fn_ingresar_tarea(?,?,?,?,?,?,?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $desc);
        $query->bindParam(2, $crit);
        $query->bindParam(3, $respon);
        $query->bindParam(4, $dep);
        $query->bindParam(5, $orig);
        $query->bindParam(6, $usu_dni);
        $query->bindParam(7, $tiempo);
        $query->bindParam(8, $tcrea);
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }

        conexion_nueva::cerrar_conexion();
    }
    function listar_tarea($accion, $fechahoy, $propio = '')
    {
        $c = conexion_nueva::conectarBD();

        $sql = "SELECT * FROM  fn_listar_tareas(?,?,?)";

        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $accion);
        $query->bindParam(2, $propio);
        $query->bindParam(3, $fechahoy);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        //var_dump(json_encode($resultado));
        foreach ($resultado as $resu) {
            $arreglo["data"][] = $resu;
        }
        return $arreglo;

        conexion_nueva::cerrar_conexion();
    }
    public function contador($accion, $dni = '')
    {
        $c = conexion_nueva::conectarBD();
        $sql = 'SELECT * from fn_contar_tarea(?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $accion);
        $query->bindParam(2, $dni);
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }

        conexion_nueva::cerrar_conexion();
    }
    public function cambiar_estado($id, $estado)
    {
        $c = conexion_nueva::conectarBD();
        $sql = 'SELECT * FROM fn_update_statu(?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $id);
        $query->bindParam(2, $estado);
        $query->execute();
        if ($row = $query->fetchColumn()) {
            return $row;
        }
        conexion_nueva::cerrar_conexion();
    }
}
/*$Probando = new model_tarea;
echo '<br>';
var_dump(json_encode($Probando->listar_tarea('No iniciada')));
*/
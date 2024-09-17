<?php

require_once 'conexion.php';

class model_pais extends conexion_nueva
{

    public function crear_pais($nombre, $dni)
    {
        $c = conexion_nueva::conectarBD();
        $sql = 'SELECT * from fn_ingresar_paises(?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $nombre);
        $query->bindParam(2, $dni);
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
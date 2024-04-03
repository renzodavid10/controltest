<?php

require_once 'conexion.php';

class model_tarea extends conexion_nueva
{

    public function crear_tarea()
    {
        $c=conexion_nueva::conectarBD() ;
        $sql = 'SELECT * from fn_ingresar_tarea(?,?,?,?,?,?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $usu_name);
        $query->bindParam(2, $usu_apap);
        $query->bindParam(3, $usu_apam);
        $query->bindParam(4, $usu_dni);
        $query->bindParam(5, $usu_celu);
        $query->bindParam(6, $usu_corr);
        $query->bindParam(7, $usu_pass);
        $query->execute();
        
    }
}

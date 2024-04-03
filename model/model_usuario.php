<?php
require_once 'conexion.php';

class model_usuario extends conexion_nueva
{

    public function create_user($usu_name, $usu_apap, $usu_apam, $usu_dni, $usu_celu, $usu_corr, $usu_pass, $usu_foto, $usu_empr)
    {
        $c = conexion_nueva::conectarBD();

        $sql = 'SELECT * from fn_crear_usuario(?,?,?,?,?,?,?,?,?)';
        $query = $c->prepare($sql);
        $query->bindParam(1, $usu_name);
        $query->bindParam(2, $usu_apap);
        $query->bindParam(3, $usu_apam);
        $query->bindParam(4, $usu_dni);
        $query->bindParam(5, $usu_celu);
        $query->bindParam(6, $usu_corr);
        $query->bindParam(7, $usu_pass);
        $query->bindParam(8, $usu_foto);
        $query->bindParam(9, $usu_empr);
        $query->execute();

        if ($row = $query->fetchColumn()) {
            return $row;
        }

        conexion_nueva::cerrar_conexion();
    }

    function listar_usuario()
    {
        $c = conexion_nueva::conectarBD();

        $sql = "SELECT * FROM  fn_listar_usuario()";

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
    public function verificar_user($usu,$pass)
    {
        $c = conexion_nueva::conectarBD();
        $sql = "SELECT * FROM fn_verificar_usu(?)";
        $arreglo = array();
        $query = $c->prepare($sql);
        $query->bindParam(1, $usu);
        $query->execute();
        $resultado = $query->fetchAll();


        foreach ($resultado as $resu) {
            //if (password_verify($pass, $resu['usua_clave'])) { // PHP brinda una funcion para poder verificar contraseñas ncriptadas ya que siempre estan cambiando
                $arreglo[] = $resu;
            //}
        }
        return $arreglo;
        conexion_nueva::cerrar_conexion();
    }
}

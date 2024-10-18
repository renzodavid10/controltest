<?php

class conexion_nueva
{

    /*private $host = 'localhost';
    /*private $host='dpg-co5of363e1ms73b99bm0-a.frankfurt-postgres.render.com';
    private $dbname = 'controltest';
    private $usuario = 'renzo';
     private $port='41401';
    private $password = 'gtNNzyOAKxKW4D7tobA8s7TdUkYLdN4R';*/

    /*private $dbname = 'db_control2';
    private $usuario = 'postgres';
    private $port='5432';
    private $password = 'root';*/

    //private $host = 'monorail.proxy.rlwy.net';
    private $host = 'junction.proxy.rlwy.net';
    private $dbname = 'railway';
    private $usuario = 'postgres';
    //private $port='41401';
    private $port='13200';
    //private $port='5432';
    private $password = 'mFSDSZesLHdGDDzOBZHgiXznAXwUxFBN';
   

    private $pdo;


    public function conectarBD()
    {

        /*try {
            $this->pdo = new PDO("pgsql:host=$this->host;dbname=$this->dbname", $this->usuario, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES 'UTF8'");
            //return"Conexión Lista";
            return $this->pdo;
        } catch (PDOException $e) {

            echo "Falló la conexión" . $e;
        }*/
        try {
            $this->pdo = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->usuario, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES 'UTF-8'");
            //return"Conexión Lista";
            return $this->pdo;
        } catch (PDOException $e) {
            echo "Falló la conexión" . $e;
        }
    }

    public function cerrar_conexion()
    {
        $this->pdo = null;
    }
}
/*$intento= new conexion_nueva;
$intento->conectarBD();*/
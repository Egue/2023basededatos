<?php

class Conectar{

    public  function con()
    {
        $username = "aplicacion";
        $password  = "M&sql2023";
        $host       = "192.168.20.38:33306";
        $basededatos ="db_miprimera";

        try{
            
        $conexion = new PDO("mysql:host=$host;dbname=$basededatos", $username, $password);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Conexión realizada Satisfactoriamente";

        return $conexion;

        }catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }
}

?>
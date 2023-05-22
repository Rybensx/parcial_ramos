<?php

abstract class Conexion{
    public static $conexion = null;

    private static function conectar(){
        try{
            //conexion a la base de datos de informix 
            self::$conexion = new PDO('informix:host=host.docker.internal; service=9088; database=cursos; server=informix; protocol=onsoctcp;EnableScrollableCursors = 1','informix','in4mix'); 
            // definir las exepciones
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "CONECTADO";
        }catch(PDOException $e){
            // mensaje de error
            echo "Error de conexion de BD";
            echo "<br>";
            echo $e->getMessage();
            exit;
        }

        return self::$conexion;
    }

    public static function ejecutar($sql){
        // conexion a la base de datos 
        self::conectar();
        // dictamos la sentencia
        $sentencia = self::$conexion->prepare($sql);
        // ejecutamos la sentencia
        $resultado = $sentencia->execute();
        // finalizaos la conexion
        self::$conexion = null;
        // retornamos resultados
        return $resultado;
    }

    public static function servir($sql){
        // conexion a la base de datos con el metodo conectar
        self::conectar();
        // dictamos la sentencia
        $sentencia = self::$conexion->prepare($sql);
        // ejecutamos la sentencia
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        // finalizamos la conexion
        self::$conexion = null;
        // retornamos los resultados
        return $resultados;
    }
}
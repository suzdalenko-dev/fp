<?php
namespace Suzdalenko\Task06;
use PDO;
use PDOException;

class Conexion{
    /* 
        Conexion class is a proper and well-implemented Singleton 
    */
    private $conexion;
    private static $instance = null;

    private function __construct(){
        try {
            $host = "localhost";
            $db   = "tarea6";
            $user = "root";
            $pass = "";
            $dsn  = "mysql:host={$host};dbname={$db};charset=utf8mb4";

            $this->conexion = new PDO($dsn, $user, $pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("Error en la conexión: mensaje: " . $ex->getMessage());
        }
    }

    public static function getInstance(){
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance->conexion;
    }
}
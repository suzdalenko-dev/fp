<?php

namespace Suzdalenko\Task06;
/*
    Product have methods to handle these entities and interact with the database 
*/
class Producto{
    private $conn;

    public function __construct() {
        /* Initialize the database connection */
        $this->conn = Conexion::getInstance();
    }

    public function getByCode($code){
        $statement = "SELECT nombre AS 'Nombre producto', descripcion AS 'Descripcion producto' FROM producto WHERE codigo = ?";
        try {
            $statement = $this->conn->prepare($statement);
            $statement->execute([$code]);
            $result    = $statement->fetch(\PDO::FETCH_ASSOC);
            if (!$result) {
                $result = ['Producto no encontrado'];
            }
            return $result;
        } catch (\PDOException $e) {
            header('HTTP/1.1 500 Internal Server Error');
            echo "Error en la base de datos: " . $e->getMessage();
        } 
    }
    
    public function getStockById($id){
        $statement = "SELECT t.nombre AS 'Tienda nombre', IFNULL(SUM(stock), 0) AS Stock
                    FROM producto p
                    LEFT JOIN tienda t ON t.id = p.tienda_id
                    WHERE p.id = ?
                    GROUP BY t.id
                    ";
        try {
            $statement = $this->conn->prepare($statement);
            $statement->execute([$id]);
            $result    = $statement->fetch(\PDO::FETCH_ASSOC);
            if (!$result) {
                $result = ['Producto no encontrado'];
            }
            return $result;
        } catch (\PDOException $e) {
            header('HTTP/1.1 500 Internal Server Error');
            echo "Error en la base de datos: " . $e->getMessage();
        } 
    }
}
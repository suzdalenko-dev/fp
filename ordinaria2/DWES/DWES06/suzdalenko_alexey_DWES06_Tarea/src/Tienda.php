<?php

namespace Suzdalenko\Task06;
/*
    Shop have methods to handle these entities and interact with the database 
*/
class Tienda{
    private $conn;

    public function __construct() {
        /* Initialize the database connection */
        $this->conn = Conexion::getInstance();
    }

    public function createShop(){
        $string_json = file_get_contents('php://input');
        $object_json = json_decode($string_json, true);

        $statement = "INSERT INTO tienda (nombre, telefono) VALUES (:nombre, :telefono);";
        try {
            $statement = $this->conn->prepare($statement);
            $statement->execute(['nombre' => $object_json['nombre'], 'telefono'  => $object_json['telefono'] ]);
            $lastInsertId = $this->conn->lastInsertId();
            http_response_code(201);
            $result = ['Response' => 'Tienda creada con exito'];
            if (!$lastInsertId) {
                $result = ['Response' => 'Error en la creacion de tienda'];
            }
            return $result;
        } catch (\PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteById($id){
        $statement = "DELETE FROM tienda WHERE id = ?";
        $stmt = $this->conn->prepare($statement);
        if ($stmt->execute([$id])) {
            if ($stmt->rowCount() > 0) {
                http_response_code(200);
                $result = ['message' => "Store with ID $id deleted successfully"];
            } else {
                http_response_code(404);
                $result = ['message' => 'Error deleting the store'];
            }
        } else {
            http_response_code(500); // Internal Server Error
            $result = ['message' => ' Internal Server Error'];
        }
        return $result;
    }
}
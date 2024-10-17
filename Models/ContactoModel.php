<?php
require_once 'Database.php'; // Incluir la clase de conexión a la base de datos

class ContactoModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Método para insertar un nuevo contacto sin el campo user_id
    public function insertContacto($motivo, $comentario, $nombre, $email) {
        try {
            // Consulta SQL para insertar datos en la tabla 'contacto'
            $sql = "INSERT INTO contacto (motivo, comentario, nombre, email) VALUES 
            (:motivo, :comentario, :nombre, :email)";
            $stmt = $this->db->prepare($sql);

            // Vincular los parámetros a la consulta
            $stmt->bindParam(':motivo', $motivo);
            $stmt->bindParam(':comentario', $comentario);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);

            // Ejecutar la consulta
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}

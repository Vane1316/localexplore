<?php
require_once 'Database.php'; // Incluir la conexión a la base de datos

class CategoriaModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Obtener todas las categorías por ID
    public function getAllCategorias($categoria_id) {
        $query = "SELECT * FROM locales WHERE categoria_id = :categoria_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':categoria_id', $categoria_id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retornar todos los registros
        } else {
            return []; // Retornar un arreglo vacío si hay un error
        }
    }
}
?>

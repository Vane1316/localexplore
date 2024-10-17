<?php
require_once '../Models/categoriaModelo.php'; // Incluir el modelo

class CategoriaController {
    private $categoriaModel;

    // Constructor que inicializa el modelo
    public function __construct() {
        $this->categoriaModel = new CategoriaModel();
    }

    // Método para obtener los locales de una categoría específica
    public function getLocalesByCategoria($categoria_id) {
        return $this->categoriaModel->getAllCategorias($categoria_id);
    }
}
?>

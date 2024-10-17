<?php
require_once '../Models/LocalModel.php'; // Incluir el modelo

class LocalController {
    private $localModel;

    // Constructor que inicializa el modelo
    public function __construct() {
        $this->localModel = new LocalModel();
    }

    // Método para registrar un nuevo local
    public function registerLocal($nombre_empresa, $nit, $direccion, $telefono, $descripcion, $servicios, $url, $nombre_categoria, $img, $horario_apertura, $horario_cierre) {
        if ($nombre_empresa && $nit && $direccion && $telefono && $descripcion && $servicios && $nombre_categoria && $horario_apertura && $horario_cierre) {
            // Intentar crear el local
            $localCreado = $this->localModel->createLocal($nombre_empresa, $nit, $direccion, $telefono, $descripcion, $servicios, $url, $nombre_categoria, $img, $horario_apertura, $horario_cierre);
            
            if ($localCreado) {
                // Si el local fue creado, redirigir a una página de éxito o detalles del local
                header("Location: ../Views/localadmi.php"); // Cambia la ruta al archivo adecuado
                exit(); // Asegurarse de que se detenga la ejecución después de la redirección
            } else {
                echo "Error al registrar el local. Por favor, inténtalo de nuevo.";
            }
        } else {
            echo "Por favor completa todos los campos obligatorios.";
            return false;
        }
    }

    // Método para obtener los datos de locales con sus categorías e imágenes
    public function getLocalesWithDetails() {
        $locales = $this->localModel->getAllLocalesWithDetails();
        return $locales !== false ? $locales : []; // Retornar datos o un arreglo vacío
    }

    // Método para obtener los detalles de un local específico por ID
    public function getLocalDetails($id_local) {
        return $this->localModel->getLocalById($id_local);
    }
}
?>

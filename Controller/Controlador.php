<?php 
namespace Controller;

class Controlador {
    public function cargarVista($nomAchivo, $datos = []) {
        // Extraer datos si es necesario
        // extract($datos);
        
        // Construir la ruta desde el directorio actual
        $rutaVista = __DIR__ . '../Views/' . $nomAchivo . '.php';
        
        if (file_exists($rutaVista)) {
            require_once $rutaVista;
        } else {
            // Manejo de error si el archivo no existe
            throw new \Exception("Vista no encontrada: {$rutaVista}");
        }
    }
}

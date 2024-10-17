<?php
require_once '../Models/contactoModel.php'; // Incluir el modelo

class ContactoController {
    private $contactoModel;

    public function __construct() {
        $this->contactoModel = new ContactoModel();
    }

    // Método para manejar la inserción de datos del formulario en la tabla contacto
    public function handleFormSubmission($motivo, $comentario, $nombre, $email) {
        // Insertar los datos en la tabla contacto
        $contactoCreado = $this->contactoModel->insertContacto($motivo, $comentario,
         $nombre, $email);
        
        if ($contactoCreado) {
            // Redirigir a una página de éxito
            header("Location: ../Views/contact.php"); 
            // Cambia esta ruta según sea necesario
            exit();
        } else {
            echo "Error al guardar los datos en la base de datos.";
        }
    }
}

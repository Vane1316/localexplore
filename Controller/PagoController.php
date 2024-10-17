<?php
require_once __DIR__.'/../Models/PagoModel.php';

class PagoController {
    private $pagoModel;

    public function __construct($db) {
        $this->pagoModel = new PagoModel($db); // Instancia del modelo de pago
    }

    // Método para procesar el pago
    public function procesarPago($datosPago) {
        if ($this->pagoModel->guardarPago($datosPago)) {
            header("Location: ../Views/subidanegocio.php"); // Redirigir a otra página después de un pago exitoso
            exit(); // Asegúrate de salir después de la redirección
        } else {
            // Manejar el error
            echo "Error al procesar el pago. Inténtalo nuevamente.";
        }
    }
}
?>

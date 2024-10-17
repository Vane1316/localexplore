<?php
require_once __DIR__.'/../Models/Database.php';
require_once __DIR__.'/../Controller/PagoController.php';

// Instanciar la conexión a la base de datos
$db = (new Database())->getConnection();

// Instanciar el controlador de pago
$pagoController = new PagoController($db);

// Obtener los datos del formulario
$datosPago = [
    'nombre' => $_POST['nombre'],
    'email' => $_POST['email'],
    'direccion' => $_POST['direccion'],
    'ciudad' => $_POST['ciudad'],
    'codigo_postal' => $_POST['codigo_postal'],
    'numero_tarjeta' => $_POST['numero_tarjeta'],
    'mes_expiracion' => $_POST['mes_expiracion'],
    'anio_expiracion' => $_POST['anio_expiracion'],
    'cvv' => $_POST['cvv'],
    'plan' => $_POST['plan'],
    // No se incluye local_id ya que se ha eliminado la relación
];

// Procesar el pago
$pagoController->procesarPago($datosPago);
?>

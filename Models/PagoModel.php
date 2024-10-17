<?php
class PagoModel {
    private $conn; // Conexión a la base de datos

    public function __construct($db) {
        $this->conn = $db; // Asignar la conexión de base de datos
    }

    // Método para guardar el pago
    public function guardarPago($datosPago) {
        $query = "INSERT INTO pagos (nombre, email, direccion, ciudad, codigo_postal, numero_tarjeta, mes_expiracion, anio_expiracion, cvv, plan, fecha_pago) 
                  VALUES (:nombre, :email, :direccion, :ciudad, :codigo_postal, :numero_tarjeta, :mes_expiracion, :anio_expiracion, :cvv, :plan, :fecha_pago)";

        $stmt = $this->conn->prepare($query);

        // Obtener la fecha actual
        $fecha_pago = date('Y-m-d H:i:s');

        // Vincular los parámetros
        $stmt->bindParam(':nombre', $datosPago['nombre']);
        $stmt->bindParam(':email', $datosPago['email']);
        $stmt->bindParam(':direccion', $datosPago['direccion']);
        $stmt->bindParam(':ciudad', $datosPago['ciudad']);
        $stmt->bindParam(':codigo_postal', $datosPago['codigo_postal']);
        $stmt->bindParam(':numero_tarjeta', $datosPago['numero_tarjeta']);
        $stmt->bindParam(':mes_expiracion', $datosPago['mes_expiracion']);
        $stmt->bindParam(':anio_expiracion', $datosPago['anio_expiracion']);
        $stmt->bindParam(':cvv', $datosPago['cvv']);
        $stmt->bindParam(':plan', $datosPago['plan']);
        $stmt->bindParam(':fecha_pago', $fecha_pago);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            return true; // Inserción exitosa
        }

        return false; // Fallo en la inserción
    }
}
?>

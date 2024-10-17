<?php
class Database {
    // Definir los parámetros de la conexión a la base de datos
    private $host = "localhost"; // Dirección del servidor de base de datos
    private $db_name = "loecplo_bd"; // Nombre de la base de datos
    private $username = "root"; // Usuario de la base de datos
    private $password = ""; // Contraseña del usuario
    public $conn; // Variable para almacenar la conexión

    // Método para obtener la conexión
    public function getConnection() {
        $this->conn = null; // Inicializar la conexión como null

        try {
            // Crear una nueva conexión PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // Configurar la conexión para que use UTF-8
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activar excepciones para errores de PDO
        } catch(PDOException $exception) {
            // Mostrar un mensaje si falla la conexión
            echo "Error de conexión: " . $exception->getMessage();
        }

        // Devolver la conexión
        return $this->conn;
    }
}
?>

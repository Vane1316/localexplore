<?php
require_once 'Database.php'; // Incluir la clase de conexión a la base de datos

class LocalModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Método para crear un nuevo local
    public function createLocal($nombre_empresa, $nit, $direccion, 
    $telefono, $descripcion, $servicios, $url, $nombre_categoria, $img, $horario_apertura, $horario_cierre) {
        try {
            // Consulta SQL para insertar datos en la tabla 'locales'
            $sql = "INSERT INTO locales (nombre_empresa, nit, direccion, 
            telefono, descripcion, servicios, url, horario_apertura, horario_cierre) VALUES 
            (:nombre_empresa, :nit, :direccion, :telefono, :descripcion, :servicios, 
            :url, :horario_apertura, :horario_cierre)";
            
            $stmt = $this->db->prepare($sql);

            // Vincular los parámetros a la consulta
            $stmt->bindParam(':nombre_empresa', $nombre_empresa);
            $stmt->bindParam(':nit', $nit);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':servicios', $servicios);
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':horario_apertura', $horario_apertura);
            $stmt->bindParam(':horario_cierre', $horario_cierre);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Obtener el ID del local recién creado
                $local_id = $this->db->lastInsertId();

                // Insertar la categoría en la tabla de categorías
                $sql_categoria = "INSERT INTO categorias (nombre_categoria) VALUES (:nombre_categoria)";
                $stmt_categoria = $this->db->prepare($sql_categoria);
                $stmt_categoria->bindParam(':nombre_categoria', $nombre_categoria);
                $stmt_categoria->execute();

                // Obtener el ID de la categoría recién creada
                $categoria_id = $this->db->lastInsertId();

                // Actualizar el local con el ID de categoría
                $sql_update_local = "UPDATE locales SET categoria_id = :categoria_id WHERE id_local = :local_id";
                $stmt_update_local = $this->db->prepare($sql_update_local);
                $stmt_update_local->bindParam(':categoria_id', $categoria_id);
                $stmt_update_local->bindParam(':local_id', $local_id);
                $stmt_update_local->execute();

                // Procesar las imágenes
                if (!empty($img['name'][0])) {
                    foreach ($img['name'] as $key => $img_name) {
                        $img_tmp = $img['tmp_name'][$key];
                        $img_url = '../Views/uploads/' . basename($img_name); 
                        
                        // Mover el archivo subido
                        if (move_uploaded_file($img_tmp, $img_url)) {
                            // Insertar la URL de la imagen en la tabla 'imagenes'
                            $sql_img = "INSERT INTO imagenes (local_id, img) VALUES (:local_id, :img)";
                            $stmt_img = $this->db->prepare($sql_img);
                            $stmt_img->bindParam(':local_id', $local_id);
                            $stmt_img->bindParam(':img', $img_url);
                            $stmt_img->execute(); // Ejecutar la inserción de la imagen
                        } else {
                            echo "Error al mover el archivo: $img_name";
                        }
                    }
                }
                return true; // Inserción exitosa
            } else {
                return false; // Error en la inserción
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Método para obtener todos los locales con sus detalles
    public function getAllLocalesWithDetails() {
        try {
            $sql = "SELECT l.id_local, l.nombre_empresa, l.nit, l.direccion, l.telefono, l.descripcion, l.servicios, l.url, c.nombre_categoria,
             i.img AS imagen_principal FROM locales l LEFT JOIN categorias c ON l.categoria_id = c.categoria_id LEFT JOIN imagenes i 
             ON l.id_local = i.local_id GROUP BY l.id_local";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(); // Ejecutar la consulta
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtener todos los resultados
        } catch (PDOException $e) {
            echo "Error: ". $e->getMessage();
            return false;
        }
    }

    // Método para obtener los detalles de un local específico por ID
    public function getLocalById($id_local) {
        try {
            $sql = "SELECT * FROM locales WHERE id_local = :id_local";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id_local', $id_local, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    // Método para obtener todas las imágenes de un local específico
    public function getImagesByLocalId($id_local) {
        try {
            $sql = "SELECT img FROM imagenes WHERE local_id = :local_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':local_id', $id_local, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retornar todas las imágenes
            } else {
                return []; // Retornar un arreglo vacío si hay un error
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>

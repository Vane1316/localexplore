<?php
include_once '../Models/UserModel.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'],)) {
            // Verificamos si la sesión ya está iniciada
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // Obtenemos el rol del usuario desde la base de datos

            // Redirigir según el rol del usuario
            $this->redirigirSegunRol($user['role']);
        } else {
            echo "Email o contraseña incorrectos.";
        }
    }

    public function redirigirSegunRol($rol) {
        // Redirigir según el rol del usuario
        switch ($rol) {
            case 'admin':
                $this->redirect('../Views/admin.php'); // Redirige a admin.php
                break;
            case 'user':
                $this->redirect('../Views/user.php'); // Redirige a user.php
                break;
            default:
                // Redirige a error404 si el rol no coincide
                $this->redirect('../Views/404/error404.php'); 
                break;
        }
    }

    private function redirect($url) {
        // Método para realizar la redirección
        header("Location: " . $url);
        exit();
    }

    public function logout() {
        // Verificamos si la sesión ya está iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy(); // Destruye la sesión
        header("Location: ../Views/inicio.php"); // Redirige a la página de inicio
        exit(); // Asegúrate de salir después de redirigir
    }
}

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Conjunto de caracteres UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configuración de vista para dispositivos móviles -->

    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="../public/css/bootstrap.min.css"> <!-- Hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="../public/css/templatemo.css"> <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="../public/css/custom.css"> 
    <!-- Cargar estilos de fuente de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css"> <!-- Hoja de estilos de Font Awesome -->

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif; /* Usar una fuente moderna */
            background-color: #f0f4f8; /* Color de fondo suave */
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95); /* Fondo blanco con un poco de transparencia */
            border-radius: 15px; /* Esquinas redondeadas */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra para profundidad */
            padding: 40px 30px; /* Espaciado interno */
            width: 400px; /* Ancho fijo del formulario */
            margin: 40px auto; /* Margen superior e inferior para separación */
            text-align: left; /* Alinear texto a la izquierda */
        }

        .my-form h1 {
            margin-bottom: 20px; /* Espacio debajo del título */
            font-weight: 500; /* Peso de la fuente */
            color: #333; /* Color del texto */
        }

        .form-label {
            display: block; /* Asegura que el label esté en su propia línea */
            margin-bottom: 8px; /* Espacio debajo del label */
            color: #555; /* Color del texto */
        }

        .form-input {
            width: 100%; /* Ocupa todo el ancho */
            padding: 10px; /* Espaciado interno */
            border: 1px solid #ccc; /* Borde suave */
            border-radius: 8px; /* Esquinas redondeadas */
            transition: border-color 0.3s; /* Transición suave en el borde */
        }

        .form-input:focus {
            border-color: #007bff; /* Color de borde al enfocar */
            outline: none; /* Eliminar el borde de enfoque predeterminado */
        }

        .btn-submit {
            width: 100%; /* Botón ocupa todo el ancho */
            padding: 10px; /* Espaciado interno */
            background-color: #007bff; /* Color de fondo */
            color: white; /* Color del texto */
            border: none; /* Sin borde */
            border-radius: 8px; /* Esquinas redondeadas */
            font-size: 16px; /* Tamaño de fuente */
            cursor: pointer; /* Cambiar cursor a puntero */
            transition: background-color 0.3s; /* Transición suave en el fondo */
        }

        .btn-submit:hover {
            background-color: #0056b3; /* Color de fondo al pasar el mouse */
        }

        .text-link {
            color: #007bff; /* Color del enlace */
            text-decoration: none; /* Sin subrayado */
        }

        .text-link:hover {
            text-decoration: underline; /* Subrayar al pasar el mouse */
        }

        .footer-text {
            text-align: center; /* Centrando el texto del pie */
            opacity: 0.6; /* Sutil opacidad */
            color: white; /* Color del texto */
            margin-top: 20px; /* Margen superior */
        }
    </style>
</head>
<body>
    <?php
        session_start();
    ?> 
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow"> <!-- Barra de navegación -->
        <div class="container d-flex justify-content-between align-items-center"> <!-- Contenedor flex para alinear elementos -->
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php"> <!-- Logo de la marca -->
                <img src="../public/img/LogoLocalExplore.png" alt="Logo" class="logo-img"> <!-- Imagen del logo -->
                <span class="ml-2">ExploreLocal</span> <!-- Nombre de la marca -->
            </a>

            <!-- Botón para colapsar la navbar en pantallas pequeñas -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Icono del botón de colapso -->
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav"> <!-- Navegación colapsable -->
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> <!-- Lista de navegación -->
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/inicio.php">Inicio</a> <!-- Enlace a la página de inicio -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localesinicio.php">Locales</a> <!-- Enlace a la página de locales -->
                        </li>
                      
                        <!-- Links para login y registro -->
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/inicio_sesion.php">Login</a> <!-- Enlace a la página de login -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="../Views/registro.php">Register</a> <!-- Enlace a la página de registro -->
                        </li>
                        <!-- Corazón (favoritos) agregado después de "Register" -->
                        <li class="nav-item">
                            <a href="favoritos.php" class="nav-link" id="heart-link">
                                <i class="fa fa-heart heart-icon"></i> <!-- Icono de corazón para favoritos -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="navbar align-self-center d-flex"> <!-- Sección de búsqueda en la navbar -->
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3"> <!-- Oculta en pantallas grandes -->
                    <div class="input-group">
                        <!-- Campo de búsqueda móvil -->
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Buscar ..."> <!-- Campo de entrada para búsqueda -->
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i> <!-- Icono de búsqueda -->
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </nav>
    <!-- Cerrar Header -->

    <br>

    <div class="form-container">
        <form action="../Public/login_action.php" method="post" class="my-form" onsubmit="return validarFormulario()">
            <h1>Inicio de Sesión</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Email" class="form-input" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-input" required>
            </div>

            <div class="flex items-center justify-between mb-5">
                <a href="../Views/forgot_password.php" class="text-sm text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn-submit">Inicio de sesión</button>

            <div class="text-center mt-3">
                <p>¿Aún no estás en Saudade? <a href="../Views/registro.php" class="text-link">Regístrate</a></p>
            </div>
        </form>
    </div>

    <div class="footer-text">
        <p>Si continúas, aceptas los Términos del servicio y confirmas que has leído nuestra política de privacidad.</p>
    </div>

    <script>
        function validarFormulario() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
    
            // Validación adicional
            if (email === "" || password === "") {
                alert("Por favor completa todos los campos.");
                return false;
            }
    
            return true;
        }
    </script>

    <script src="../Public/js/validacioninicio.js"></script> 
</body>
</html>

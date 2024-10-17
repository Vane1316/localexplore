<?php
session_start(); // Inicia la sesión para el manejo de usuarios
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Establece la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Hace que la página sea responsiva -->

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="../public/css/bootstrap.min.css"> <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="../public/css/templatemo.css"> <!-- Estilos de la plantilla -->
    <link rel="stylesheet" href="../public/css/custom.css"> <!-- Estilos personalizados -->

    <!-- Cargar fuentes después de renderizar los estilos de la plantilla -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> <!-- Fuente Roboto -->
    <link rel="stylesheet" href="../public/css/fontawesome.min.css"> <!-- Estilos de Font Awesome -->

    <!-- Estilo personalizado -->
    <style>
        /* Ajuste del mapa para hacerlo más grande */
        .map-container {
            text-align: center;
            margin: 20px;
        }
        iframe {
            border: 0;
            width: 1000px; /* Aumenta el ancho del mapa */
            height: 700px; /* Aumenta la altura del mapa */
        }

        /* Estilo del formulario */
        form {
            border: 2px solid black; /* Añadir borde negro */
            padding: 20px;
            background-color: #fff;
        }

        /* Ajuste de los campos de entrada */
        input, textarea {
            width: 100%; /* Hacer los campos más grandes */
            padding: 15px; /* Aumentar el espacio dentro de los campos */
            margin-bottom: 15px; /* Espacio entre los campos */
            border-radius: 5px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde gris claro */
        }

        /* Alinear nombre y correo debajo del motivo y comentario */
        #nombre, #email {
            margin-top: 20px; /* Añadir espacio arriba de nombre y correo */
        }
    </style>

</head>

<body>

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
                            <a class="nav-link" href="../Views/user.php">usuario</a> <!-- Enlace a la página de usuario -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localesUser.php">Locales</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localesUser.php">Locales</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/contact.php">Contactos</a> <!-- Enlace a la página de contactos -->
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
          <!-- Contenido adicional del menú --> 
           <div class="flex items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                  <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>
                </div>
            </div>
   
    </nav>
    <!-- Cerrar Header -->

    <!-- Modal de Búsqueda -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal para búsqueda -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <!-- Botón para cerrar el modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0"> <!-- Formulario dentro del modal -->
                <div class="input-group mb-2">
                    <!-- Campo de búsqueda en el modal -->
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Buscar ..."> <!-- Campo de entrada para búsqueda -->
                    <button type="submit" class="input-group-text bg-success text-light"> <!-- Botón de envío -->
                        <i class="fa fa-fw fa-search text-white"></i> <!-- Icono de búsqueda -->
                    </button>
                </div>
            </form>
        </div>
    </div>
<!-- Fin del Header -->

<!-- Inicio del Contenido -->
<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Contactos Infinity</h1>
        <p>Dinos tus inconvenientes con nuestra pagina o servicios</p>
    </div>
</div>

<!-- Mapa de Google -->
<div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31796.404217183986!2d-74.470206!3d5.01404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409a46b61023ff%3A0x82094f500526ecb4!2sVilleta%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1724362127878!5m2!1ses!2sco" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
<!-- Formulario de Contacto -->
<div class="container py-5">
    <div class="row py-5 justify-content-center">
        
        <form action="../Public/enviarContacto.php" method="POST" class="p-8 rounded-md shadow-md" style="background-color: #f7f7f7; border: 2px solid #333; max-width: 700px; width: 100%; font-size: 18px;">
            <!-- Título del formulario -->
            <h2 class="text-center mb-5" style="color: #000000; font-family: 'Bernard MT Condensed'; font-size: 40px; font-weight: bold;">CONTÁCTENOS</h2>

            <!-- Contenedor de nombre y email en una sola fila -->
            <div class="row">
                <!-- Nombre -->
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="block text-sm font-medium" style="color: #333;">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required style="border: 1px solid #333; color: #333; width: 100%; height: 42px; padding: 8px;">
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-3">
                    <label for="email" class="block text-sm font-medium" style="color: #333;">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required style="border: 1px solid #333; color: #333; width: 100%; height: 42px; padding: 8px;">
                </div>
            </div>

            <!-- Motivo -->
            <div class="mt-4 mb-3">
                <label for="motivo" class="block text-sm font-medium" style="color: #333;">Motivo</label>
                <input type="text" id="motivo" name="motivo" class="form-control" placeholder="Motivo" required style="border: 1px solid #333; color: #333; width: 100%; height: 42px; padding: 8px;">
            </div>

            <!-- Comentario -->
            <div class="mt-4 mb-3">
                <label for="comentario" class="block text-sm font-medium" style="color: #333;">Comentario</label>
                <textarea id="comentario" name="comentario" rows="5" class="form-control" placeholder="Escribe tu comentario" required style="border: 1px solid #333; color: #333; width: 100%; padding: 10px;"></textarea>
            </div>

            <!-- Botón Enviar -->
            <div class="mt-4 text-right">
                <button type="submit" class="btn btn-success font-bold py-2 px-4 rounded" style="background-color: #28a745; border: 2px solid #333; color: #fff; font-size: 18px; padding: 10px 20px; transition: background-color 0.3s;">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>



<!-- Pie de página -->
<footer class="bg-dark text-light py-5" id="footer">
    <div class="container">
        <!-- Información de contacto y redes sociales -->
    </div>
    <div class="w-100 bg-black py-3">
        <div class="container text-center">
            <p>&copy; <span id="current-year"></span> Company Infinity. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

</body>
</html>

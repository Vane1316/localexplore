

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pago Planes</title>
    <meta charset="utf-8"> <!-- Configuración de la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Para asegurar que la página sea responsive -->

    <!-- Icono para dispositivos Apple -->
    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png">
    <!-- Icono del favicon del sitio -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/LogoLocalExplore.png">

    <!-- Estilos CSS principales del sitio -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/templatemo.css">
    <link rel="stylesheet" href="../public/css/custom.css">

    <!-- Estilos de las fuentes de Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <!-- Estilos de FontAwesome para los iconos -->
    <link rel="stylesheet" href="../public/css/fontawesome.min.css">
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
                            <a class="nav-link" href="../Views/admin.php">usuario</a> <!-- Enlace a la página de usuario -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localadmi.php">Locales</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/about.php">planes</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/contactadmi.php">Contactos</a> <!-- Enlace a la página de contactos -->
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
<div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
    <div class="auth flex items-center w-full md:w-full">
            <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>
    </nav>
    

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
<!-- Cerrar Header -->

    <!-- Contenido -->
    <div class="container py-5">
    <h1 class="h2 pb-4 text-center">Información de Pago</h1>
    <form action="../Public/procesar_pago.php" method="post">
        <div class="row g-3">
            <!-- Información del Usuario -->
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <!-- Dirección de Facturación -->
            <div class="col-12">
                <label for="direccion" class="form-label">Dirección de Facturación</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="col-md-6">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>
            </div>
            <div class="col-md-6">
                <label for="codigo_postal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
            </div>
            
            <!-- Información de la Tarjeta de Crédito -->
            <div class="col-md-6">
                <label for="numero_tarjeta" class="form-label">Número de Tarjeta</label>
                <input type="text" class="form-control" id="numero_tarjeta" name="numero_tarjeta" required minlength="16" maxlength="16">
            </div>
            <div class="col-md-3">
                <label for="mes_expiracion" class="form-label">Mes de Expiración</label>
                <input type="text" class="form-control" id="mes_expiracion" name="mes_expiracion" required minlength="2" maxlength="2">
            </div>
            <div class="col-md-3">
                <label for="anio_expiracion" class="form-label">Año de Expiración</label>
                <input type="text" class="form-control" id="anio_expiracion" name="anio_expiracion" required minlength="4" maxlength="4">
            </div>
            <div class="col-md-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required minlength="3" maxlength="4">
            </div>

            <!-- Selección del Plan -->
            <div class="col-12">
                <label for="plan" class="form-label">Selecciona un Plan</label>
                <select class="form-select" id="plan" name="plan" required>
                    <option value="basico">Plan Básico - $10 USD</option>
                    <option value="avanzado">Plan Avanzado - $30 USD</option>
                    <option value="premium">Plan Premium - $50 USD</option>
                </select>
            </div>

            
            <!-- Botón de Enviar -->
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Procesar Pago</button>
            </div>
        </div>
    </form>
</div>


<!-- Fin de contenido -->

<!--Brands-->
    <section class="bg-light py-5"> <!-- Sección que muestra las marcas con fondo claro y espaciado vertical -->
    <div class="container my-4"> <!-- Contenedor principal con márgenes verticales -->
        <div class="row text-center py-3"> <!-- Fila para alinear el contenido en el centro y espaciado vertical -->
            <div class="col-lg-6 m-auto"> <!-- Columna centrada para el título y descripción -->
                <h1 class="h1">Marcas</h1> <!-- Título de la sección -->
                <p>
                    Marcas reconocidas del mercado <!-- Descripción de la sección -->
                </p>
            </div>
            <div class="col-lg-9 m-auto tempaltemo-carousel"> <!-- Columna para el carrusel de marcas -->
                <div class="row d-flex flex-row"> <!-- Fila flexible para los controles y carrusel -->
                    <!--Controls-->
                    <div class="col-1 align-self-center"> <!-- Columna para el control de deslizamiento hacia la izquierda -->
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev"> <!-- Enlace para retroceder en el carrusel -->
                            <i class="text-light fas fa-chevron-left"></i> <!-- Ícono de flecha hacia la izquierda -->
                        </a>
                    </div>
                    <!--End Controls-->

                    <!--Carousel Wrapper-->
                    <div class="col"> <!-- Columna para el contenedor del carrusel -->
                        <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel"> <!-- Carrusel que se desliza automáticamente -->
                            <!--Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox"> <!-- Contenedor de las diapositivas -->
                                <!-- First slide -->
                                <div class="carousel-item active"> <!-- Primera diapositiva activa -->
                                    <div class="row"> <!-- Fila para alinear las marcas -->
                                        <div class="col-3 p-md-5"> <!-- Columna para una marca -->
                                            <a href="https://www.kfc.co/"><img class="img-fluid brand-img" src="assets/img/marca1.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.ea.com/es-es"><img class="img-fluid brand-img" src="assets/img/marca2.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.adidas.co/"><img class="img-fluid brand-img" src="assets/img/marca3.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.gucci.com/es/es/"><img class="img-fluid brand-img" src="assets/img/marca4.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End First slide -->

                                <!-- Second slide -->
                                <div class="carousel-item"> <!-- Segunda diapositiva -->
                                    <div class="row"> <!-- Fila para alinear las marcas -->
                                        <div class="col-3 p-md-5"> <!-- Columna para una marca -->
                                            <a href="https://www.tesla.com/"><img class="img-fluid brand-img" src="assets/img/logo1.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.apple.com/co/"><img class="img-fluid brand-img" src="assets/img/logo2.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.microsoft.com/es-co"><img class="img-fluid brand-img" src="assets/img/logo3.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.nike.com/es/"><img class="img-fluid brand-img" src="assets/img/logo4.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Second slide -->
                            </div>
                            <!-- End Slides -->
                        </div>
                    </div>
                    <!--End Carousel Wrapper-->

                    <!--Controls-->
                    <div class="col-1 align-self-center"> <!-- Columna para el control de deslizamiento hacia la derecha -->
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next"> <!-- Enlace para avanzar en el carrusel -->
                            <i class="text-light fas fa-chevron-right"></i> <!-- Ícono de flecha hacia la derecha -->
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brands-->
    
<!-- Start Footer -->
<footer class="bg-dark text-light py-5" id="footer"> <!-- Sección de pie de página con fondo oscuro y texto claro -->
    <div class="container"> <!-- Contenedor principal del pie de página -->
        <div class="row mb-4"> <!-- Fila para el contenido del pie de página -->
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0"> <!-- Columna para la información de la empresa -->
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Título de la empresa -->
                <ul class="list-unstyled mt-4"> <!-- Lista de contacto sin estilo -->
                    <li class="d-flex align-items-center mb-3"> <!-- Elemento de lista con icono y texto -->
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i> <!-- Icono de ubicación -->
                        <span>Villeta</span> <!-- Ubicación de la empresa -->
                    </li>
                    <li class="d-flex align-items-center mb-3"> <!-- Elemento de lista para el teléfono -->
                        <i class="fa fa-phone me-2 fs-5"></i> <!-- Icono de teléfono -->
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a> <!-- Número de teléfono -->
                    </li>
                    <li class="d-flex align-items-center"> <!-- Elemento de lista para el correo -->
                        <i class="fa fa-envelope me-2 fs-5"></i> <!-- Icono de correo electrónico -->
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Correo electrónico -->
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8"> <!-- Columna para los enlaces de redes sociales -->
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3"> <!-- Contenedor flexible para alinear los iconos de redes sociales -->
                    <ul class="list-inline mb-0"> <!-- Lista de iconos de redes sociales sin estilo -->
                        <li class="list-inline-item mx-2"> <!-- Icono de Facebook -->
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Icono de Instagram -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Icono de Twitter -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Icono de LinkedIn -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div> <!-- Línea horizontal separadora -->
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3"> <!-- Contenedor para la parte inferior del pie de página -->
            <div class="container text-center"> <!-- Contenedor centrado -->
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved. <!-- Texto de derechos de autor -->
                </p>
                <p class="mb-0"> <!-- Texto de política de privacidad y términos de servicio -->
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

    <!-- Agrega los scripts de Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

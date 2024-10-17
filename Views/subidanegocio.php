<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>ExploreLocal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Íconos de la aplicación -->
    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png">
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/templatemo.css">
    <link rel="stylesheet" href="../public/css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/slick-theme.css">
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .map-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #f0f0f0;
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .image-preview {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }
        .image-preview img {
            max-width: 100px; /* Ajustar el tamaño de la vista previa */
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .form-container {
            background-color: #fff;
            padding: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Sombra */
            border-radius: 8px;
            border: 2px solid #000; /* Borde negro */
            max-width: 800px; /* Dimensiones del contenedor del formulario */
            margin: auto; /* Centrar horizontalmente */
        }
        .form-group {
            margin-bottom: 1.5rem; /* Margen entre los inputs */
        }
        .form-row {
            display: flex;
            justify-content: space-between; /* Alinear dirección y teléfono uno al lado del otro */
        }
        .form-row > div {
            flex: 1; /* Ocupa el mismo espacio */
            margin-right: 1rem; /* Margen entre los elementos */
        }
        .form-row > div:last-child {
            margin-right: 0; /* Sin margen para el último elemento */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php">
                <img src="../public/img/LogoLocalExplore.png" alt="Logo" class="logo-img">
                <span class="ml-2">ExploreLocal</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item"><a class="nav-link" href="../Views/admin.php">usuario</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Views/lacaladmi.php">Locales</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Views/subidanegocio.php">subir negocio</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Views/contact.php">Contactos</a></li>
                        <li class="nav-item">
                            <a href="favoritos.php" class="nav-link" id="heart-link">
                                <i class="fa fa-heart heart-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Buscar ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
        <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
            <div class="auth flex items-center w-full md:w-full">
                <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>
            </div>
        </div>
    </nav>
    <!-- Cerrar Header -->

    <div class="container mx-auto py-5">
        <div class="form-container">
            <h1 class="h2 pb-4 text-center">Registrar Negocio</h1>
            <form action="../Public/registerLocal.php" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="form-group col-md-6">
                        <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
                        <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nit" class="form-label">NIT</label>
                        <input type="text" class="form-control" id="nit" name="nit" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="form-row col-12">
                        <div class="form-group">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="servicios" class="form-label">Servicios</label>
                            <input type="text" class="form-control" id="servicios" name="servicios" required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="form-group col-12">
                        <label for="url" class="form-label">URL</label>
                        <input type="url" class="form-control" id="url" name="url" oninput="updateUrlPreview()" required>
                        <div id="urlPreview" class="mt-2"></div>
                    </div>
                    <div class="form-row col-12">
                        <div class="form-group">
                            <label for="horario_apertura" class="form-label">Horario de Apertura</label>
                            <input type="time" class="form-control" id="horario_apertura" name="horario_apertura" required>
                        </div>
                        <div class="form-group">
                            <label for="horario_cierre" class="form-label">Horario de Cierre</label>
                            <input type="time" class="form-control" id="horario_cierre" name="horario_cierre" required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label for="imagenes" class="form-label">Selecciona hasta 4 imágenes</label>
                        <input type="file" class="form-control" id="imagenes" name="img[]" accept="image/*" multiple required onchange="previewImages()">
                        <div class="image-preview" id="imagePreview"></div>
                    </div>
                    <div class="form-group col-12">
                        <label for="nombre_categoria" class="form-label">Categoría</label>
                        <select class="form-control" id="nombre_categoria" name="nombre_categoria" required>
                            <option value="">Seleccionar categoría</option>
                            <option value="Restaurante">Restaurante</option>
                            <option value="Tienda">Tienda</option>
                            <option value="Servicio">Servicio</option>
                        </select>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Registrar Negocio</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function updateUrlPreview() {
            var urlInput = document.getElementById('url');
            var urlPreview = document.getElementById('urlPreview');
            urlPreview.innerHTML = '<a href="' + urlInput.value + '" target="_blank">' + urlInput.value + '</a>';
        }

        function previewImages() {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = ''; // Limpiar vista previa anterior
            var files = document.getElementById('imagenes').files;

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();
                reader.onload = (function(file) {
                    return function(e) {
                        var imgElement = document.createElement('img');
                        imgElement.src = e.target.result;
                        imagePreview.appendChild(imgElement);
                    };
                })(file);
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/slick.min.js"></script>
    <script src="../public/js/custom.js"></script>
</body>
</html>

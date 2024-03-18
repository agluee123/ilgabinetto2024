<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il gabinetto</title>
    <link rel="shortcut icon" href="/ilgabinetto/imagenes/icon.png" type="image/x-icon">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="/ilgabinetto/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/ilgabinetto/Vistas/style.css" />
    <link rel="stylesheet" href="/ilgabinetto/Vistas/carrousel.css">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-gray mb-0">
        <div class="container-fluid">
            <!-- Centra el contenido horizontalmente -->
            <div class="mx-auto text-center">
                <a class="navbar-brand" href="#">
                    <img src="/ilgabinetto/imagenes/54c96c8c335ef95b13d92f0915ddbc36.png" alt="Logo" width="300" height="75" />
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="inicio.php">Inicio</a>

                    <!-- Botón "Catálogo" con opciones desplegables -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="catalogo.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catálogo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="catalogo.php#lineaClasica">Línea Clásica</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="catalogo.php#lineaMaral">Línea Maral</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="catalogo.php#peinadorClasico">Línea Peinador Clásico</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="catalogo.php#peinadorMaral">Línea Peinador Maral</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="catalogo.php#tolvaClasica">Línea Tolva Clásica</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="catalogo.php#tolvaMaral">Línea Tolva Maral</a>
                            </li>
                        </ul>
                    </div>

                    <a class="nav-link" href="sobre-nosotros.php">Sobre Nosotros</a>
                    <a class="nav-link" href="contacto.php">Contáctanos</a>
                </div>
            </div>
        </div>
    </nav>

    <!--FIN NAVBAR-->

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h1>Sobre Nosotros</h1>
                <p>En Il gabinetto, nos especializamos en la fabricación de vanitorys de alta calidad para clientes mayoristas. Nuestros productos destacan por su excelente calidad y durabilidad. Estamos comprometidos a brindar un servicio excepcional a nuestros clientes, asegurando su completa satisfacción en cada paso del proceso.</p>
            </div>
            <div class="col-lg-6">
                <img src="/ilgabinetto/imagenes/fotos muebles/FOTOS FABRICA 2018/22.jpg" alt="Imagen de la empresa" class="img-fluid">
            </div>
        </div>
    </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Nuestra Historia</h2>
                <p>Desde nuestros humildes inicios a principios de los años 2000, Il gabinetto ha estado comprometido con la fabricación y distribución de vanitorys al por mayor en todo el territorio nacional. Nuestra historia está marcada por un constante crecimiento y dedicación a proporcionar soluciones de mobiliario de baño que satisfagan las necesidades de nuestros clientes.

                    A medida que hemos avanzado en el tiempo, hemos logrado ganarnos la confianza de clientes clave gracias a nuestra capacidad para realizar entregas eficientes y confiables en el interior del país. Este enfoque en la calidad del servicio y la atención al cliente nos ha permitido expandir nuestra presencia en el mercado nacional, estableciendo relaciones sólidas y duraderas con una amplia gama de clientes en toda la industria.

                    Hoy en día, Il gabinetto se enorgullece de su posición como un jugador destacado en el sector del mobiliario para baño al por mayor, y seguimos comprometidos con nuestra misión de ofrecer productos de calidad y un servicio excepcional a cada uno de nuestros clientes en todo el país.</p>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-muted py-4">
        <div>
            <p>&copy; 2023 Il gabinetto Fabrica de muebles para baño. Todos los derechos reservados.</p>
            <p>Contáctanos: ilgabinetto@yahoo.com.ar | Teléfono: (011) 4467-5151</p>
        </div>
    </footer>
    <script src="/ilgabinetto/js/bootstrap.bundle.min.js"></script>
</body>

</html>
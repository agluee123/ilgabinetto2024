<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il gabinetto</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="/ilgabinetto/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/ilgabinetto/vistas/style.css" />
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-gray mb-0">
        <div class="container-fluid">
            <!-- Centra el contenido horizontalmente -->
            <div class="mx-auto text-center">
                <a class="navbar-brand" href="#">
                    <img src="/ilgabinetto/imagenes/54c96c8c335ef95b13d92f0915ddbc36.png" alt="Logo" width="300"
                        height="75" />
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="inicio.php">Inicio</a>

                    <!-- Botón "Catálogo" con opciones desplegables -->
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="catalogo.php" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                <p>Somos una empresa comprometida con la excelencia y la innovación en la industria. Nuestra misión es
                    proporcionar soluciones de calidad a nuestros clientes y superar sus expectativas en cada proyecto
                    que emprendemos.</p>
                <p>Con más de 10 años de experiencia en el mercado, hemos construido una reputación sólida y confiable.
                    Estamos dedicados a trabajar en equipo y aportar nuestro conocimiento y experiencia para lograr el
                    éxito de nuestros clientes.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/400x300" alt="Imagen de la empresa" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Nuestra Historia</h2>
                <p>Desde nuestra fundación en [año de fundación], hemos estado comprometidos con [misión o enfoque de la
                    empresa]. A lo largo de los años, hemos [logros o hitos importantes en la historia de la empresa].
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>Nuestro Equipo</h2>
                <p>Nuestro equipo está formado por profesionales altamente calificados y apasionados por lo que hacen.
                    Trabajamos juntos para brindar soluciones de calidad y superar las expectativas de nuestros
                    clientes.</p>
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
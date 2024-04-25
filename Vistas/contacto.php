<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="e1wkKrUcF43DSkx2de8DEFCgWGG1sZM9VBJ7IKQXnaM" />
    <title>Il gabinetto</title>
    <link rel="shortcut icon" href="/ilgabinetto/imagenes/icon.png" type="image/x-icon">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="/ilgabinetto/css/bootstrap.min.css">
    <link rel="stylesheet" href="/ilgabinetto/Vistas/style.css">
    <link rel="stylesheet" href="/ilgabinetto/Vistas/fuente.css">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-gray mb-0">
        <div class="container-fluid">
            <!-- Centra el contenido horizontalmente -->
            <div class="mx-auto text-center">
                <a class="navbar-brand" href="#">
                    <img src="/ilgabinetto/imagenes/54c96c8c335ef95b13d92f0915ddbc36.png" alt="Logo" width="300" height="75" class="logo" />
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
                                <a class="dropdown-item" href="catalogo.php#lineaMaralAbierto">Línea Maral abierto</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="catalogo.php#peinadorClasico">Línea Peinador Clásico</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="catalogo.php#Marcoespejo">Línea Marcoespejo</a>
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
                            <li>
                                <a class="dropdown-item" href="catalogo.php#Lavadero">Línea Lavadero</a>
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

    <div class="container">
        <br>
        <h1 class="text-center">Formulario de Contacto</h1>
        <?php
        // Verificar si se ha enviado el parámetro 'enviado' para mostrar mensajes
        if (isset($_GET['enviado'])) {
            if ($_GET['enviado'] == 1) {
                // Mostrar mensaje de éxito con JavaScript
                echo '<script>alert("El correo se envió correctamente");</script>';
            } elseif ($_GET['enviado'] == 0) {
                // Mostrar mensaje de error con JavaScript
                echo '<script>alert("Error al enviar el correo ");</script>';
            }
        }
        ?>

        <form id="contact-form" method="POST" action="/ilgabinetto/Negocio/mail.php">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="14" style="resize: none;" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: grey;border-color: white;" name="enviar">Enviar</button>
            <div id="mensaje"></div>

        </form>
    </div>

    <div class="wasap">
        <a href="https://wa.me/541157335794"><img src="/ilgabinetto/imagenes/WhatsApp.svg.webp" alt="" class="buton-wasap"></a>
    </div>


    <script src="/ilgabinetto/js/bootstrap.bundle.min.js"></script>
</body>

<footer class="bg-light text-center text-muted py-4">
    <div class="container">
        <p>
            &copy; 2024 Il gabinetto Fabrica de muebles para baño. Todos los
            derechos reservados.
        </p>
        <p>Contáctanos: ilgabinetto@yahoo.com.ar | Teléfono: (011) 4467-5151</p>
    </div>
</footer>

</html>
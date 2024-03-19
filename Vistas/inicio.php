<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="google-site-verification" content="e1wkKrUcF43DSkx2de8DEFCgWGG1sZM9VBJ7IKQXnaM" />
  <title>Il gabinetto</title>
  <link rel="shortcut icon" href="/ilgabinetto/imagenes/icon.png" type="image/x-icon">
  <!-- CSS Bootstrap -->
  <link href="/ilgabinetto/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/ilgabinetto/Vistas/style.css" />
  <link rel="stylesheet" href="/ilgabinetto/Vistas/carrousel.css">
  <link rel="stylesheet" href="/ilgabinetto/Vistas/fuente.css">
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

  <!--CARROUSEL-->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="max-height: 900px; object-fit: cover;">
        <img src="/ilgabinetto/imagenes/16.jpg" class="d-block img-fluid" alt="..." style="width:100%"/>
        <div class="carousel-caption d-none d-md-block bg-dark-transparent">
          <h2 class="text-white">Fabricación de muebles de primera calidad.</h2>
          <p class="text-white" style="font-size: 20px;">Fabricamos muebles de primera calidad que destacan por su elegancia y durabilidad. Confía en nosotros para llevar la excelencia a tu hogar o proyecto comercial.</p>
        </div>
      </div>

      <div class="carousel-item" style="max-height: 900px ; object-fit:cover">
        <img src="/ilgabinetto/imagenes/17.jpg" class="d-block img-fluid" alt="..." style="width:100%"/>
        <div class="carousel-caption d-none d-md-block bg-dark-transparent">
          <h2>Solo ventas por mayor.</h2>
          <p>Nos especializamos en ventas al por mayor para satisfacer las necesidades de proyectos comerciales y residenciales. Confía en nosotros para proveerte de muebles de primera calidad para baños a gran escala y a nivel individual para hogares..</p>
        </div>
      </div>
      <div class="carousel-item" style="max-height: 900px ; object-fit:cover">
        <img src="/ilgabinetto/imagenes/30-min.jpg" class="d-block img-fluid" alt="..." style="width:100%"/>
        <div class="carousel-caption d-none d-md-block bg-dark-transparent">
          <h2>Servicio Puerta a Puerta para Ventas al Por Mayor.</h2>
          <p>Con nuestro servicio puerta a puerta, llevamos soluciones para baños directamente a tu negocio.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--FIN CARROUSEL-->

  <div class="jumbotron text-center">
    <br />
    <h1 class="display-4">Fábrica de muebles para baños</h1>
    <p class="lead">
      Con más de dos décadas de experiencia en la industria, somos líderes en la fabricación de muebles para baños de calidad superior. Nos distinguimos por nuestra excelencia en calidad y fiabilidad, ofreciendo productos duraderos y estéticamente atractivos que se adaptan a una variedad de estilos de baños. Nuestro compromiso con entregas inmediatas y un servicio puerta a puerta sin problemas garantiza una experiencia sin igual para nuestros clientes, mientras que nuestra amplia gama de líneas de muebles permite encontrar la solución perfecta para cada entorno. Confía en nosotros para transformar tu baño en un espacio excepcional.
    </p>
    <hr class="my-4" />
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- Columna de dirección -->
        <div class="list-group">
          <h3 class="list-group-item list-group-item-action active" style="background-color: gray; border-color: white">
            Dónde Estamos
          </h3>
          <div class="list-group-item">
            <i class="fas fa-map-marker-alt"></i> Montgolfier 2179
          </div>
          <div class="list-group-item">
            <i class="fas fa-map-marker-alt"></i> (1757) Gregorio de Laferrere
            – Pdo. de La Matanza
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- Columna de contacto -->
        <div class="list-group">
          <h3 class="list-group-item list-group-item-action active" style="background-color: gray; border-color: white">
            Contacto
          </h3>
          <div class="list-group-item">
            <i class="fas fa-phone"></i> Teléfono: 011 4278-9150
          </div>
          <div class="list-group-item">
            <i class="fab fa-whatsapp"></i> Whatsapp: +54 9 11 3177-4656
          </div>
          <div class="list-group-item">
            <i class="far fa-envelope"></i> E-mail: ilgabinetto@yahoo.com.ar
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-light text-center text-muted py-4">
    <div class="container">
      <p>
        &copy; 2023 Il gabinetto Fabrica de muebles para baño. Todos los
        derechos reservados.
      </p>
      <p>Contáctanos: ilgabinetto@yahoo.com.ar | Teléfono: (011) 4467-5151</p>
    </div>
  </footer>

  

  <!-- Scripts de Bootstrap (deben estar al final del cuerpo del documento) -->
  <script src="/ilgabinetto/js/bootstrap.bundle.min.js"></script>
</body>


</html>
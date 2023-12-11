<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jannar's Motor's | Inicio</title>
  <meta charset="utf-8">
  <meta name="author" content="Leiber Bertel">
  <meta name="description" content="Sitio web para venta de vehículos">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
  <?php include "../includes/header.php"; ?>
  <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="../assets/img/brand/carrusel3.jpg" class="d-block w-100" id="carrusel-img"
            alt="imagen que transmite seguridad" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Todos nuestro vehículos proveen seguridad</h5>
            <p>Ven con nosotros te asesoraremos.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/img/brand/carrusel1.jpg" class="d-block w-100" id="carrusel-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Diseños atrativos y versátiles</h5>
            <p>Los mejores diseños del mercado.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/img/brand/carrusel2.jpg" class="d-block w-100" id="carrusel-img" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Sedes en casi todos los puntos de la ciudad</h5>
            <p>Soporte técnico simúltaneo las 24 horas.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </section>

  <section>
    <div class="px-4 py-5 my-5 text-center">
      <img class="d-block mx-auto mb-4" src="../assets/img/brand/engine.png" alt width="72" height="57">
      <h1 class="display-5 fw-bold">Jannar's Motor's</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-3">
          Un vehículo para cada estilo de vida
          Vea nuestra línea completa de vehículos y encuentre el que mejor se adapte a usted.
        </p>
      </div>
    </div>
  </section>

  <section>
    <div class="container marketing py-5">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fs-4">Asistencia Jannar's Motor's</h2>
          <p class="lead">Cuentas con un equipo de expertos para ti y para tu vehículo Ford en todo el camino..</p>
        </div>
        <div class="col-md-5">
          <img class=" bd-placeholder-img  bd-placeholder-img-lg featurette-image img-fluid mx-auto"
            src="../assets/img/brand/comercial1.jpg" alt="asistencia inmediata" width="600" height="600">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Pick Up & Delivery</h2>
          <p class="lead">Recogemos y entregamos tu vehículo Janar's Motor's donde nos indiques sin costo.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="../assets/img/brand/comercial2.jpg" alt="entrega" width="500"
            height="300">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">De humanos</h2>
          <p class="lead">Alma, esa palabra infinita y profunda que almacena años de experiencias vividas, desafíos
            superados y aprendizajes recibidos, es la que le da vida a cada cosa que hacemos en Jannar..</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="../assets/img/brand/comercial3.jpg" alt="personas" width="600"
            height="600">
        </div>
      </div>
  </section>

  <section class="container">
    <?php include "../includes/footer.php"; ?>
  </section>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
  <title>Jannar's Motor's | Vehículos</title>
  <meta charset="utf-8">
  <meta name="author" content="Leiber Bertel">
  <meta name="description" content="Sitio web para venta de vehículos">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../img/brand/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
  <header class="container-fluid">
    <div class="p-3 row text-white header">
      <div class="col">
        <img src="../img/brand/engine.png" width="60" class="rounded img-fluid mx-auto d-block"
          alt="Logo Jannar's Motor's">
      </div>
      <div class="col text-center">
        <h5 class="h5">Jannar's Motors</h5>
        <p class="lead fs-6">Ventas de vehículos veloces y eficientes</p>
      </div>
      <div class="col text-contact">
        <p>Leiber Bertel S.A.S</p>
        <p>Leiber@ejemplo.com</p>
        <p>3000234344</p>
      </div>
    </div>
  </header>
  <nav class="navbar navbar-expand-sm  nav-header">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item bg-primary rounded">
          <a class="nav-link active text-white" href="../index.html">Inicio
            <img src="../img/tools/home.png" width="24" alt="">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../registro.html">Registro
            <img src="../img/tools/registro.png" alt="">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Lista de vehículos
            <img src="../img/tools/lista-coches.png" alt="">
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-5">
    <h2 class="text-center">Lista de Vehículos</h2>
    <hr>

    <form action="mostrarVehiculos.php" method="get">
      <div class="form-group">
        <label for="filtro_tipo_vehiculo">Buscar por tipo de Vehículo</label>
        <select class="form-control" id="filtro_tipo_vehiculo" name="filtro_tipo_vehiculo">
          <option value="">Todos</option>
          <option value="Carro">Carros</option>
          <option value="Moto">Motos</option>
          <option value="Barco">Barcos</option>
          <option value="Helicóptero">Helicópteros</option>
        </select>
      </div>
      <button type="submit" name="filtrar" class="btn btn-primary my-2">Vamos</button>
    </form>

    <?php
        require_once "../config.php";

        // Lógica para filtrar por tipo de vehículo
        $filtro_tipo_vehiculo = isset($_GET['filtro_tipo_vehiculo']) ? $_GET['filtro_tipo_vehiculo'] : '';

        // Consulta SQL con el filtro de tipo de vehículo (si se ha seleccionado)
        if (!empty($filtro_tipo_vehiculo)) {
            $sql_filter = "SELECT * FROM vehiculos WHERE tipo_vehiculo = '$filtro_tipo_vehiculo'";
            $result = $conn->query($sql_filter);
        } else {
            $sql = "SELECT * FROM vehiculos";
            $result = $conn->query($sql);
        }

        $resultados_por_pagina = 6;

        if ($result->num_rows > 0) {
            $contador = 0;
            echo '<div class="row my-4">'; // Abre la primera fila
            while ($row = $result->fetch_assoc()) {
                // Obtener los datos de cada registro
                $tipo_vehiculo = $row['tipo_vehiculo'];
                $modelo = $row['modelo'];
                $anio = $row['anio'];
                $color = $row['color'];
                $descripcion = $row['descripcion'];
                $ruta_imagen = $row['ruta_imagen'];

                // Mostrar las imágenes en cuadrículas de 3x3
                if ($contador % 3 == 0 && $contador > 0) {
                    echo '</div><div class="row">'; // Cierra la fila anterior y abre una nueva fila
                }

                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="' . $ruta_imagen . '" class="card-img-top img-fluid" alt="Imagen del vehículo">';
                echo '<div class="card-body">';
                echo '<p class="card-text"><strong>Tipo de Vehículo:</strong> ' . $tipo_vehiculo . '</p>';
                echo '<p class="card-text"><strong>Modelo:</strong> ' . $modelo . '</p>';
                echo '<p class="card-text"><strong>Año:</strong> ' . $anio . '</p>';
                echo '<p class="card-text"><strong>Color:</strong> ' . $color . '</p>';
                echo '<p class="card-text"><strong>Descripción:</strong> ' . $descripcion . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                $contador++;
            }

            echo '</div>'; // Cierra la última fila
        } else {
            echo "<p>No se encontraron vehículos en la base de datos.</p>";
        }

        ?>

    <!-- Paginación -->
    <nav aria-label="Paginación">
      <ul class="pagination justify-content-center">
        <?php
                // Calcular el número total de páginas
                $sql_total = "SELECT COUNT(*) as total FROM vehiculos";
                $result_total = $conn->query($sql_total);
                $fila_total = $result_total->fetch_assoc();
                $total_paginas = ceil($fila_total['total'] / $resultados_por_pagina);

                // Generar los enlaces a las diferentes páginas
                for ($i = 1; $i <= $total_paginas; $i++) {
                    echo '<li class="page-item ';
                    if ($i == $pagina_actual) {
                        echo 'active';
                    }
                    echo '">';
                    echo '<a class="page-link" href="?pagina=' . $i . '">' . $i . '</a>';
                    echo '</li>';
                }
                ?>

      </ul>
    </nav>
  </div>
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">
        <img src="../img/tools/arrow-to-top.png" alt="Flecha hacia arriba" width="40px"
          class="my-2 bg-primary rounded p-2">
      </a>
    </p>
  </div>
  <section class="container">
    <footer class="py-3 my-5">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="../index.html" class="nav-link px-2 text-light">Inicio</a></li>
        <li class="nav-item"><a href="../registro.html" class="nav-link px-2">Registro</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2">Lista de vehículos</a></li>
      </ul>
      <p class="text-center">&copy; 2023 <a class="text-light" target="_blank"
          href="https://leiberbertel.github.io">Leiber Bertel</a></p>
    </footer>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
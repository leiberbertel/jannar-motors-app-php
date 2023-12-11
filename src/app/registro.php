<?php
$registroExitoso = false;

require_once "../../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_vehiculo = $_POST['tipo_vehiculo'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];

    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        $nombre_temporal = $_FILES['imagen']['tmp_name'];
        $nombre_archivo = $_FILES['imagen']['name'];
        $ruta_destino = "../../carpeta_imagenes/" . $nombre_archivo;

        if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
            $sql = "INSERT INTO vehiculos (tipo_vehiculo, modelo, anio, color, descripcion, ruta_imagen)
                    VALUES ('$tipo_vehiculo', '$modelo', '$anio', '$color', '$descripcion', '$ruta_destino')";

            if ($conn->query($sql) === TRUE) {
                $registroExitoso = true;
            } else {
                echo "Error al guardar el registro: " . $conn->error;
            }
        } else {
            echo "Error al mover la imagen al directorio de destino.";
        }
    } else {
        echo "Error: Debes seleccionar una imagen.";
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jannar's Motor's | Registro</title>
  <meta charset="utf-8">
  <meta name="author" content="Leiber Bertel">
  <meta name="description" content="Sitio web para venta de vehículos">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/img/brand/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>

<?php include "../includes/header.php"; ?>
  <section class="container mt-4 w-50">
    <h3 class="text-center">Registro de vehículos</h3>
    <form action="registro.php" method="post" enctype="multipart/form-data">
      <div class="mb-3 mt-3">
        <label for="tipo_vehiculo">Tipo de vehículo:</label>
        <select name="tipo_vehiculo" class="form-select" multiple aria-label="multiple select example">
          <option>Moto</option>
          <option>Carro</option>
          <option>Barco</option>
          <option>Helicóptero</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="modelo">Modelo:</label>
        <input class="form-control" placeholder="Ingresa el modelo" name="modelo">
      </div>
      <div class="mb-3">
        <label for="anio">Año:</label>
        <input class="form-control" placeholder="Ingresa el año del modelo" name="anio">
      </div>
      <div class="mb-3">
        <label for="color">Color:</label>
        <input type="color" class="form-control form-control-color" id="color" name="color" value="#CCCCCC">
      </div>
      <div class="mb-3">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" rows="5" id="descripcion" name="descripcion"></textarea>
      </div>
      <div class="mb-3">
        <label for="img">Adjunte una imágen:</label>
        <input type="file" accept=".png, .jpg, .jpeg" name="imagen" class="form-control">
      </div>
      <div class="form-check mb-3">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="terms-conditions" value="acepto" title="Recuerda esta casilla" checked required> Acepto los
          términos y condiciones
        </label>
      </div>
      <button type="submit" class="btn btn-primary" name="registro">Enviar</button>
    </form>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

  <?php if ($registroExitoso): ?>
  <script>
    swal.fire({
      title: '¡Excelente!',
      text: 'El vehículo ha sido registrado exitosamente',
      icon: 'success',
      confirmButtonText: 'Ok',
      customClass: {
        popup: 'popup-class',
        title: 'title-class',
        confirmButton: 'button-class'
      }
    });
  </script>
  <?php endif; ?>

  <section class="container">
    <?php include "../includes/footer.php"; ?>
  </section>
</body>
</html>

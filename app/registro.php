<?php
require_once "../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_vehiculo = $_POST['tipo_vehiculo'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];

    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        $nombre_temporal = $_FILES['imagen']['tmp_name'];
        $nombre_archivo = $_FILES['imagen']['name'];
        $ruta_destino = "../carpeta_imagenes/" . $nombre_archivo;

        if (move_uploaded_file($nombre_temporal, $ruta_destino)) {
            $sql = "INSERT INTO vehiculos (tipo_vehiculo, modelo, anio, color, descripcion, ruta_imagen)
                    VALUES ('$tipo_vehiculo', '$modelo', '$anio', '$color', '$descripcion', '$ruta_destino')";

            if ($conn->query($sql) === TRUE) {
                header("Location: registroExitoso.php");
                exit();
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

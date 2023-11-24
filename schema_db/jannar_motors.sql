CREATE SCHEMA jannar_motors;

USE jannar_motors;

CREATE TABLE vehiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_vehiculo ENUM('Moto', 'Carro', 'Barco', 'Helicóptero') NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    anio YEAR NOT NULL,
    color VARCHAR(7) NOT NULL,
    descripcion VARCHAR(200) NOT NULL,
    ruta_imagen VARCHAR(255)
);

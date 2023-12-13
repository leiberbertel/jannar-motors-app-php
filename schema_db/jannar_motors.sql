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

CREATE TABLE rol (
    idrol INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    rol VARCHAR(30) NOT NULL
);

CREATE TABLE usuario (
    idusuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    usuario VARCHAR(40) NOT NULL,
    rol INT(11) NOT NULL,
    contrasena VARCHAR(50) NOT NULL
);
## Jannar Motors 🚗

Jannar Motors es una aplicación web para gestionar vehículos. Permite almacenar información sobre diferentes tipos de vehículos, incluyendo imágenes.

## Requisitos Previos 🚧
Para ejecutar este proyecto, necesitas tener instalado:

- PHP (versión 8.0 o superior)
- MySQL
- Servidor web (como Apache o Nginx)
- Composer

## Configuración Inicial 🛠 

1. Clonar el repositorio:

``` sh
git clone https://github.com/leiberbertel/jannar-motors-app-php.git
```

2. Ingresar a la carpeta del proyecto:

```sh
cd jannar-motors-app-php
```

3. Instalar dependecias:
``` sh
compose install
```

## Configuración de la base de datos:
Crea una base de datos llamada jannar_motors en tu sistema MySQL (configurada en jannar_motors.sql).
Importa la estructura de la base de datos desde el archivo jannar_motors.sql adjunto en el paquete schema_db.

### Archivo `.env`:
- Crea un archivo .env en la raíz del proyecto.
- Añade las siguientes líneas, reemplazando con tus detalles de la base de datos:
```sh
SERVERNAME = tu host
USERNAME = tu usuario
PASSWORD =  tu contraseña
DBNAME = nombre base de datos
```
### Configuración del archivo `config.php`
- Asegúrate de que config.php esté configurado para usar las variables de entorno del archivo .env.
- Un ejemplo de como se vería la configuración:
```sh
<?php 
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$servername = $_ENV['SERVERNAME'];
$username = $_ENV['USERNAME'];
$password = $_ENV['PASSWORD'];
$dbname = $_ENV['DBNAME'];
?>
```

## Correr el proyecto 🚀:
1. Iniciar el servidor de PHP
2. Accede a la aplicación a través de tu navegador web en http://localhost/[nombre-proyecto].
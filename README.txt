## Instalación

Sigue estos pasos para instalar y configurar el proyecto en tu entorno local.

### Requisitos Previos

Asegúrate de tener instalado [XAMPP](https://www.apachefriends.org/es/index.html) en tu máquina.

### Pasos

1. Clona la carpeta "anothersaes" en la carpeta `htdocs` de tu instalación de XAMPP:

2. Abre tu navegador y visita `http://localhost/anothersaes`.

### Configuración de la Base de Datos

1. Abre phpMyAdmin en tu navegador visitando `http://localhost/phpmyadmin`.

2. Crea una nueva base de datos llamada `anothersaes_1`.

3. Selecciona la nueva base de datos y navega a la pestaña "Importar".

4. Sube el archivo `tablas.sql` para crear las tablas necesarias en la base de datos.

5. Actualiza el archivo de configuración de conexión (`model/conexion.php`) con los detalles correctos de tu base de datos:

    ```php
    $contrasena = "";
    $usuario = "root";
    $nombre_bd = "anothersaes_1";
    
    try {
        $bd = new PDO(
            'mysql:host=localhost;dbname='.$nombre_bd,
            $usuario,
            $contrasena,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (Exception $e) {
        echo "Problema con la conexion: ".$e->getMessage();
    }
    ```

6. ¡Listo! Ahora deberías poder acceder a tu proyecto desde `http://localhost/anothersaes`.


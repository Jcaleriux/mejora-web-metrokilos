<?php

$mensaje = "";
$errores = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $mensaje_usuario = trim($_POST['mensaje'] ?? '');

    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Ingrese un correo electrónico válido.";
    }

    if (!preg_match('/^[0-9]{8}$/', $telefono)) {
        $errores[] = "El teléfono debe tener exactamente 8 dígitos.";
    }

    if (empty($mensaje_usuario)) {
        $errores[] = "El mensaje no puede estar vacío.";
    }

    if (empty($errores)) {
        
            echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Error en el formulario</title>
        <link rel='stylesheet' href='style/base.css'>
        <link rel='stylesheet' href='style/inicio.css'>
    </head>
    <body>
        <header class='panel_superior'>
            <div class='logo'>
                <img src='recursos/Imagenes/logo.jpg' alt='logo' >
            </div>
            <nav class='menu'>
                <a href='index.html'>Inicio</a>
                <a href='quienes_somos.html'>¿Quiénes somos?</a>
                <a href='productos.html'>Productos</a>
                <a href='donde_estamos.html'>¿Dónde estamos?</a>
                <a href='contactenos.html'>Contáctenos</a>
            </nav>
        </header>    
    
        <main>

            <img src='recursos/Imagenes/fondo6.png' alt='Fondo' class='fondo' >

            <div class='contenido_inicio'>
                <h2>¡Gracias $nombre su solicitud fue enviada!</h2>
                <p>Pronto nos comunicaremos con usted.</p>";

        echo "<a href='productos.html' class='btn_productos'>Continuar explorando productos</a>
            </div>
        </main>
        <footer>
            <p>
                Desarrollado por José Ramírez C. Estudiante de Universidad Politécnica Internacional, como parte de un proyecto académico. No afiliado a la empresa original.
            </p>
        </footer>
    </body>
    </html>";
    } else {
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Error en el formulario</title>
        <link rel='stylesheet' href='style/base.css'>
        <link rel='stylesheet' href='style/inicio.css'>
    </head>
    <body>
        <header class='panel_superior'>
            <div class='logo'>
                <img src='recursos/Imagenes/logo.jpg' alt='logo' >
            </div>
            <nav class='menu'>
                <a href='index.html'>Inicio</a>
                <a href='quienes_somos.html'>¿Quiénes somos?</a>
                <a href='productos.html'>Productos</a>
                <a href='donde_estamos.html'>¿Dónde estamos?</a>
                <a href='contactenos.html'>Contáctenos</a>
            </nav>
        </header>    
    
        <main>

            <img src='recursos/Imagenes/fondo6.png' alt='Fondo' class='fondo' >

            <div class='contenido_inicio'>
                <h2>Apreciamos tu opinion...</h2>
                <p>Por favor, corrige los errores y vuelve a intentarlo.</p>";
                echo "<div style='background-color:#f8d7da; color:#721c24; padding:15px; border-radius:5px; margin:20px; text-align:center;'>";
                echo "<strong>Errores encontrados:</strong><ul style='list-style:none; padding:0;'>";
                foreach ($errores as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                }
                echo "</ul></div>";

        echo "<a href='index.html' class='btn_productos'>Volver a formulario</a>
            </div>
        </main>
        <footer>
            <p>
                Desarrollado por José Ramírez C. Estudiante de Universidad Politécnica Internacional, como parte de un proyecto académico. No afiliado a la empresa original.
            </p>
        </footer>
    </body>
    </html>";
}

}
?>

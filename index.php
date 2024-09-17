<!-- Mejorar los tamaños de las cosas, verificar el tamaño de las imagenes -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Examen Programación II</title>
</head>
<body>
    <?php 
        // $rutaJSON = './json/info.json';
        // $JSON_contenido = file_get_contents($rutaJSON);
        // $datosCarrito = json_decode($JSON_contenido, true);
        // echo "<pre>";
        // var_dump( $datosCarrito );
        // echo "</pre>";
        include './componentes/header.php';
        ?>
    <main>
        <?php 
            include './componentes/presentacion.php';
        ?>
    </main>
</body>
</html>
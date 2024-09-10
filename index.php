<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Programación II</title>
</head>
<body>
    <?php 
        $rutaJSON = './json/info.json';
        $JSON_contenido = file_get_contents($rutaJSON);
        $datosCarrito = json_decode($JSON_contenido, true);
        echo "<pre>";
        var_dump( $datosCarrito );
        echo "</pre>";
    ?>
    <header>

    </header>

</body>
</html>
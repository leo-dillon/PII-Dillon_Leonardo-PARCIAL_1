<?php 
    require_once './clases/Conexion.php';
    require_once './clases/Funciones.php';
    require_once './clases/Secciones.php';
    $seccionActual = Funciones::seccionActual();
    $seccionesValidas = Secciones::seccionesValidas();
    if(!in_array($seccionActual, $seccionesValidas)){
        $seccionActual = '404';
    }


    require_once './clases/Categoria.php';

    $asd = Categoria::get_x_id(6);
    $asd->edit('Sal');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/general.css">
    <link rel="stylesheet" href="./estilos/<?=$seccionActual?>.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title><?= $seccionActual ?> -- Examen Programación II</title>
</head>
<body>
    <?php 
        require_once './includes/header.php';
    ?>  
    <main>
        <?php 
           require_once "./vistas/$seccionActual.php";

            // Funciones::mostrar($asd)
        ?>
    </main>
    <?php  
        require_once './includes/footer.php'
    ?>
</body>
</html>
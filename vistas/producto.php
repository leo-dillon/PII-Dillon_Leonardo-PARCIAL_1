<?php 
    require_once './clases/Productos.php'; 
    require_once './clases/Funciones.php'; 
    $id = $_GET['id'];
    $producto = Productos::traerProductoID($id);

    // Funciones::mostrar($producto -> getDescription());
?>

<section>
    <div>
        <picture>
            <img src="<?= $producto -> getThumbnail() ?>" alt="<?= $producto -> getTitle() ?>">
        </picture>
        <div class="info">
            <h1><?= $producto -> getTitle() ?></h1>
        </div>
    </div>
</section>
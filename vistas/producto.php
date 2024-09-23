<?php 
    require_once './clases/Productos.php'; 
    require_once './clases/Funciones.php'; 
    $id = $_GET['id'];
    $producto = Productos::traerProductoID($id);
    $num = Funciones::randomNum(3,12);

    // Funciones::mostrar($producto -> getDescription());
?>

<section class='producto'>
    <div>
        <picture>
            <img src="<?= $producto -> getThumbnail() ?>" alt="<?= $producto -> getTitle() ?>">
        </picture>
        <div class="info">
            <h1><?= $producto -> getTitle() ?></h1>
            <h2>Categoria: <?= $producto -> getCategory() ?> </h2>
            <p><strong> $ <?= $producto -> getPrice() ?></strong></p>
            <p>Hasta <?= $num ?> cuotas <strong>SIN INTERÉS</strong></p>
            <div class="cantidad">
                <div>
                    <button>-</button>
                    <p>0</p>
                    <button>+</button>
                </div>
                <button class="carrito">Agregar al carrito</button>
            </div>
        </div>
    </div>
</section>
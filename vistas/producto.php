<?php 
    require_once './clases/Productos.php'; 
    require_once './clases/Funciones.php'; 
    $id = $_GET['id'];
    $producto = Productos::traerProductoID($id);
    $num = Funciones::randomNum(3,12);
?>

<section class='producto'>
    <div>
        <?php  
            if($producto != null){ 
            $color = Funciones::colorRating($producto -> getRating())    
        ?>
        <picture>
            <img src="<?= $producto -> getThumbnail() ?>" alt="<?= $producto -> getTitle() ?>">
            <span style='<?= $color ?>' > <?= $producto -> getRating() ?> </span>
            <figcaption><strong>Descripción:  </strong><br> <?= $producto -> getDescription() ?></figcaption>
        </picture>
        <div class="info">
            <h1><?= $producto -> getTitle() ?></h1>
            <?php 
                if($producto -> getBrand() != null){
                    $brand = $producto -> getBrand();
                    echo " <p>Marca: <strong>$brand</strong> </p>";
                }
            ?>
            <p>Categoria: <strong> <?= $producto ->getCategory() ?> </strong> </p>
            <p>Productos en Stock: <strong class="stock"> <?= $producto -> getStock() ?> </strong> </p>
            <h2><strong> $ <?= $producto -> getPrice() ?></strong></h2>
            <p>Hasta <?= $num ?> cuotas <strong>SIN INTERÉS</strong></p>
            <div class="cantidad">
                <div>
                    <button class="restar">-</button>
                    <p class="valor ">3</p>
                    <button class="sumar">+</button>
                </div>
                <button class="carrito btn1">Agregar al carrito</button>
            </div>
        </div>
        <?php } else {?>
            <div class="error">
                <h1>Error al encontrar el prodcuto seleccinado</h1>
                <a href="sec=tienda">volver a la tienda</a>
            </div>
        <?php } ?>
    </div>
</section>
<script src="./js/producto.js"></script>
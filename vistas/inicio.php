<?php
    require_once './clases/Productos.php';
    $imagen = Productos::trearImagenRandom();
    $categorias = Productos::traerCategoriasImagen();
?>
<section class="cartelera">
    <div class="publicidad">
        <div class="izquierda">
            <h1>Lifestyle deluxe</h1>
            <p>Descuentos imperdibles</p>
        </div>
        <div class="derecha">
            <h2>12 Cuotas sin interés</h2>
            <a href="?sec=productos">Comprar</a>    
        </div>
        <picture class="img">
            <img src="<?= $imagen ?>" alt="">
        </picture>
    </div>
</section>
<section class="categorias">
    <h2>Categorías</h2>
    <div>
        <?php foreach ($categorias as $categoria){ ?>
            <a href="?sec=tienda&cat=<?=$categoria -> getCategory()?>">
                <?= $categoria -> getCategory() ?>
                <img src="<?= $categoria -> getThumbnail() ?>" alt="imagen de categoría <?= $categoria -> getCategory() ?>">
            </a>
        <?php }?>
    </div>
</section>
<script src="./js/efectos.js"></script>
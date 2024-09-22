<?php 
    require_once './clases/Funciones.php'; 
    require_once './clases/Productos.php'; 
    $categorias = Productos::traerCategorias();
    $formCategorias = Funciones::generarSelect('Categoria', 'cat', $categorias);
    $tags = Productos::traerTags();
    $formTags = Funciones::generarSelect('Etiquetas', 'tag', $tags);
    $brands = Productos::traerBrand();
    $formBrands = Funciones::generarSelect('Marcas', 'mar', $brands);
    $formRating = Funciones::generarSelect('Calificación', 'rat', [1,2,3,4,5]);
    
    // Funciones::mostrar( $brands );
?>

<form action="" method="GET">
    <h2>Filtrar:</h2>
    <input type="hidden" name="sec" value="tienda">
    <?= $formCategorias ?>
    <?= $formRating ?>
    <?= $formTags ?>
    <?= $formBrands ?>
    <div class="price">
        <label for="pri">Precio minimo </label>
        <p class="small">$ 10</p>
        <input class="inputPrecio" type="range" name="pri" min="10" max="100" value="10">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
<section class="productos">
    <h1>Tienda oficial</h1>
    <p class="small">30 productos</p>
    <div>
        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>
        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>
        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>
        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>
        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>
        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>

        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>
        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>


        <div class="producto">
            <picture>
                <img src="https://cdn.dummyjson.com/products/images/beauty/Essence%20Mascara%20Lash%20Princess/thumbnail.png" alt="">
            </picture>
            <div class="info">
                <h3>Nombre del producto</h3>
                <p class="price">$ 12</p>
                <p class="text">Hasta 12 cuotas <strong>sin interes</strong></p>
                <button>Agregar</button>
            </div>
        </div>
        
    </div>
</section>
<script src="./js/productos.js"></script>
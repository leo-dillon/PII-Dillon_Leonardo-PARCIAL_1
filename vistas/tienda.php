<?php 
    require_once './clases/Funciones.php'; 
    require_once './clases/Productos.php'; 
    $productos = Productos::traerProductos();
    if(isset($_GET['cat']) && $_GET['cat'] != ''){
        $productos = array_filter($productos, function($pro){
            return $_GET['cat'] == $pro -> getCategory() ;
        });
    }
    if(isset($_GET['rat']) && $_GET['rat'] != ''){
        $productos = array_filter($productos, function($pro){
            return $_GET['rat'] < $pro -> getRating() ;
        });
    }
    if(isset($_GET['tag']) && $_GET['tag'] != ''){
        $productos = array_filter($productos, function($pro){
            $tags = $pro -> getTags();
            if(in_array($_GET['tag'], $tags)){
                return $pro;
            };
        });
    }
    if(isset($_GET['mar']) && $_GET['mar'] != ''){
        $productos = array_filter($productos, function($pro){
            return $_GET['mar'] == $pro -> getBrand() ;
        });
    }
    if(isset($_GET['pri']) && $_GET['pri'] != ''){
        $productos = array_filter($productos, function($pro){
            return $_GET['pri'] < $pro -> getPrice() ;
        });
    }
    $categorias = Productos::traerCategorias();
    $formCategorias = Funciones::generarSelect('Categoria', 'cat', $categorias);
    $tags = Productos::traerTags();
    $formTags = Funciones::generarSelect('Etiquetas', 'tag', $tags);
    $brands = Productos::traerBrand();
    $formBrands = Funciones::generarSelect('Marcas', 'mar', $brands);
    $formRating = Funciones::generarSelect('Calificación', 'rat', [1,2,3,4,5]);
    
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
        <p class="small">$ 0</p>
        <input class="inputPrecio" type="range" name="pri" min="0" max="1000" value="0">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
<section class="productos">
    <h1>Tienda oficial</h1>
    <p class="small"><?= count($productos) ?> productos</p>
    <div>
        <?php
            if(count($productos) == 0){
                echo '<h2>No se econtraron resultados</h2>';
            }else{
                foreach ($productos as $pro) {
                    echo Funciones::generarProducto($pro -> getThumbnail(), $pro -> getTitle(), $pro -> getPrice(), $pro -> getRating(), $pro -> getID() );
                }
            }
        ?>
    </div>
</section>
<script src="./js/tienda.js"></script>
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
            <a class="btn2" href="?sec=tienda">Comprar</a>    
        </div>
        <picture class="img">
            <img src="<?= $imagen ?>" alt="">
        </picture>
    </div>
</section>
<section class="presentacion">
    <div>
        <div class="text">
            <h2>Bienvenido a nuestra tienda online</h2>
            <p>Donde la variedad se encuentra con la calidad. Descubre nuestra amplia selección de productos, desde artículos del hogar hasta las últimas tendencias en tecnología. Nos esforzamos por ofrecerte lo mejor, con precios increíbles y envíos rápidos para que tu experiencia de compra sea siempre la mejor.</p>
            <p class="destacado"><strong>¡ Encuentra justo lo que necesitas !</strong></p>
        </div>
        <picture>
            <img src="./img/tienda.avif" alt="Tienda física de Av Pueyrredon ">
        </picture>
    </div>
    <div>
        <picture>
            <img src="./img/tienda2.avif" alt="Tienda física de Av Pueyrredon ">
        </picture>
        <div class="text">
            <h2>¿ Por qué elegirnos ?</h2>
            <ul>
                <li> <strong>Variedad Inigualable</strong>: Ofrecemos un amplio catálogo de productos para todas tus necesidades, desde lo esencial hasta lo innovador.</li>
                <li><strong>Calidad Garantizada</strong>: Trabajamos con proveedores de confianza para asegurar que cada artículo cumpla con los más altos estándares.</li>
                <li><strong>Envíos Rápidos y Seguros</strong>: Recibe tus compras en la puerta de tu casa con la tranquilidad de un servicio confiable.</li>
                <li><strong>Atención Personalizada</strong>: Nuestro equipo está siempre disponible para ayudarte en cada paso de tu compra.</li>
            </ul>
        </div>
    </div>
    </section>
    <section class="categorias">
    <h2>Categorías</h2>
    <div>
        <?php foreach ($categorias as $categoria){ ?>
            <a class="btn1" href="?sec=tienda&cat=<?=$categoria -> getCategory()?>">
                <?= $categoria -> getCategory() ?>
                <img src="<?= $categoria -> getThumbnail() ?>" alt="imagen de categoría <?= $categoria -> getCategory() ?>">
            </a>
        <?php }?>
    </div>
</section>
<script src="./js/efectos.js"></script>
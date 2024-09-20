<?php 
    require_once "./clases/Secciones.php";
    require_once "./clases/Funciones.php";
    $seccionesVisibles = Secciones::seccionesVisibles();

?> 

<header>
    <div>
        <div class="contenedorLogo">
            <picture>
                <img src="./img/logo.png" alt="Logo de Leonardo Dillon">
            </picture>
            <h2>Luce Delicate</h2>
        </div>
        <nav>
            <?php
                foreach($seccionesVisibles as $value){
                    $valueSeccion = $value -> getSeccion();
                    $valueTitulo = $value -> getTitulo();
            ?>
                <a 
                    class="<?= ($seccionActual === $valueSeccion) ? 'active' : ''?>" 
                    href="?sec=<?= $valueSeccion ?>"
                    >
                        <?= $valueTitulo ?>
                </a>
            <?php 
                }   
            ?>
        </nav>
    </div>
</header>
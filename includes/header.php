<?php 
    require_once "./clases/Secciones.php";
    require_once "./clases/Funciones.php";
    $seccionesVisibles = Secciones::seccionesVisibles();

?> 

<header>
    <div>
        <picture class="contenedorLogo">
            <img src="./img/logo.png" alt="Logo de Leonardo Dillon">
        </picture>
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
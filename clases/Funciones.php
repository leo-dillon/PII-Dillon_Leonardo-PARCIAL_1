<?php
    require_once './clases/Productos.php'; 

    class Funciones {
        public static function seccionActual(): string {
            $seccion = isset($_GET['sec']) ? $_GET['sec'] : 'inicio';
            return $seccion;
        }

        public static function randomNum($min, $max ): string {
            $num = random_int($min, $max);
            return $num;
        }
        public static function generarSelect($title, $name , $opciones): string {
            $select = "<div>";
            $select .= "<label for='{$name}'>{$title}:</label>";
            $select .= "<select name='{$name}' id='{$name}'>";
            $select .= "<option style='display:none' value='' disebled select>{$opciones[0]}</option>";
            foreach ($opciones as $opc) {
                $select .= "<option value='{$opc}'>{$opc}</option>";
            }
            $select .= "</select>";
            $select .= "</div>";
            return $select;
        }
        public static function generarProducto($img, $title, $price, $rating, $id) : string {
            $cuotas = self::randomNum(3,12);
            $color = '';
            if($rating > 4){
                $color = 'color: green';
            } else if ($rating < 1){
                $color = 'color: red';
            }
            $producto = "<div class='producto'>";
            $producto .= "<a href='#'><picture>";
            $producto .= "<img src='{$img}' alt='{$title}'>";
            $producto .= "</picture></a>";
            $producto .= "<div class='info'>";
            $producto .= "<p class='id' style='display:none'>{$id}</p>";
            $producto .= "<h3>{$title}</h3>";
            $producto .= "<p class='price'>$ {$price}</p>";
            $producto .= "<p class='text'>Hasta {$cuotas} cuotas <strong>sin interes</strong></p>";
            $producto .= "<button class='agregarCarrito' href='#'>Agregar </button>";
            $producto .= "</div>";
            $producto .= "<p style='{$color}' class='rating'>{$rating}</p>";
            $producto .= "</div>";
            return $producto;
        }
        public static function mostrar($a) : void {
            echo '<pre>';
            var_dump($a);
            echo '</pre>';
        }
    }
?>
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
            $select .= "<option value='' disebled select>{$opciones[0]}</option>";
            foreach ($opciones as $opc) {
                $select .= "<option value='{$opc}'>{$opc}</option>";
            }
            $select .= "</select>";
            $select .= "</div>";
            return $select;
        }
        public static function mostrar($a) : void {
            echo '<pre>';
            var_dump($a);
            echo '</pre>';
        }
    }
?>
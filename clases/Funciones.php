<?php
    class Funciones {
        public static function seccionActual(): string {
            $seccion = isset($_GET['sec']) ? $_GET['sec'] : 'inicio';
            return $seccion;
        }
    }
?>
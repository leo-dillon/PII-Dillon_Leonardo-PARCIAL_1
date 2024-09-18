<?php
class Secciones {
    private $seccion;
    private $texto;
    private $titulo;
    private $visible;

    public function getSeccion(): string {
        return $this -> seccion;
    }
    public function getTexto(): string {
        return $this -> texto;
    }
    public function getTitulo(): string {
        return $this -> titulo;
    }
    public function getVisible(): bool {
        return $this -> visible;
    }
    public static function sinNombre(): array {
        $seccionesValidas = [];
        $JSON = file_get_contents('./json/secciones.json');
        $JSONData = json_decode($JSON);
        foreach ($JSONData as $value){
            $sec = new self();
            $sec -> seccion = $value -> seccion;
            $sec -> texto = $value -> texto;
            $sec -> titulo = $value -> titulo;
            $sec -> visible = $value -> visible;
            $seccionesValidas[] = $sec;
        }
        return $seccionesValidas;
    }
    public static function seccionesVisibles(): array {
        $seccionesVisibles = [];
        $JSON = file_get_contents('./json/secciones.json');
        $JSONData = json_decode($JSON);
        foreach ($JSONData as $value){
                if( $value -> visible){
                    $sec = new self();
                    $sec -> seccion = $value -> seccion;
                    $sec -> titulo = $value -> titulo;
                    $seccionesVisibles[] = $sec;
                }
        }
        return $seccionesVisibles;
    }
    public static function seccionesvalidas(): array {
        $seccionesValidas = [];
        $JSON = file_get_contents('./json/secciones.json');
        $JSONData = json_decode($JSON, true);
        foreach ($JSONData as $value) {
            $seccionesValidas[] = $value['seccion'];
        }
        return $seccionesValidas;
    }
}
?>
<?php
    require_once './clases/Funciones.php';

    class Productos {
        private $id;
        private $title;
        private $description;
        private $category;
        private $price;
        private $discountPercentage;
        private $rating;
        private $stock;
        private $tags;
        private $brand;
        private $reviews;
        private $images;
        private $thumbnail;

        public function getTitle() {
            return $this->title;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getCategory() {
            return $this->category;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getDiscountPercentage() {
            return $this->discountPercentage;
        }

        public function getRating() {
            return $this->rating;
        }

        public function getStock() {
            return $this->stock;
        }

        public function getTags() {
            return $this->tags;
        }

        public function getBrand() {
            return $this->brand;
        }

        public function getReviews() {
            return $this->reviews;
        }

        public function getImages() {
            return $this->images;
        }

        public function getThumbnail() {
            return $this->thumbnail;
        }
        public static function traerProductos(): array {
            $gondola = [];
            $JOSN = file_get_contents("./json/productos.json");
            $JSONData = json_decode($JOSN);
            foreach ($JSONData as $producto) {
                $producto = new self();
                $producto -> discountPercentage = $producto -> discountPercentage; 
                $producto -> description = $producto -> description; 
                $producto -> thumbnail = $producto -> thumbnail; 
                $producto -> category = $producto -> category; 
                $producto -> reviews = $producto -> reviews; 
                $producto -> rating = $producto -> rating; 
                $producto -> images = $producto -> images; 
                $producto -> title = $producto -> title; 
                $producto -> price = $producto -> price; 
                $producto -> stock = $producto -> stock; 
                $producto -> brand = $producto -> brand; 
                $producto -> tags = $producto -> tags; 
                $producto -> id = $producto -> id; 
                $gondola[] = $producto;
            }
            return $gondola;
        }
        public static function trearImagenRandom(): string {
            $imagen = '';
            $JOSN = file_get_contents("./json/productos.json");
            $JSONData = json_decode($JOSN);
            $num = Funciones::randomNum(1,30);
            if($num == 7 || $num == 9 || $num == 19 ){
                //Realizo esta verificación, porque las imagenes que me traen están falladas.
                $num = 12;
            };
            foreach ($JSONData as $producto) {
                if($producto -> id == $num){
                    $imagen = $producto -> thumbnail;
                }
            }
            return $imagen;
        }
        public static function traerCategoriasImagen(): array{
            $categorias = [];
            $respuesta = [];
            $JOSN = file_get_contents("./json/productos.json");
            $JSONData = json_decode($JOSN);
            foreach ($JSONData as $producto) {
                $categoriaActual = $producto -> category; 
                if(!in_array( $categoriaActual, $categorias)){
                    $categorias[] = $producto -> category;
                    $categoria = new self();
                    $categoria -> category = $producto -> category;
                    $categoria -> thumbnail = $producto -> thumbnail;
                    $respuesta[] = $categoria;
                }
            }
            return $respuesta;
        }
        public static function traerCategorias() : array {
            $categorias = [];
            $JOSN = file_get_contents("./json/productos.json");
            $JSONData = json_decode($JOSN);
            foreach ($JSONData as $producto) {
                $categoriaActual = $producto -> category; 
                if(!in_array( $categoriaActual, $categorias)){
                    $categorias[] = $producto -> category;
                };
            }
            return $categorias;
        }
        public static function traerTags() : array {
            $tags = [];
            $JOSN = file_get_contents("./json/productos.json");
            $JSONData = json_decode($JOSN);
            foreach ($JSONData as $producto) {
                foreach ($producto -> tags as $a) {
                    $tagActual = $a; 
                    if(!in_array( $tagActual, $tags)){
                        $tags[] = $a;
                    };
                }
            }
            return $tags;
        }
        public static function traerBrand() : array {
            $brands = [];
            $JOSN = file_get_contents("./json/productos.json");
            $JSONData = json_decode($JOSN);
            foreach ($JSONData as $producto) {
                if( isset($producto -> brand) ){
                    $brandActual = $producto -> brand; 
                    if(!in_array( $brandActual, $brands)){
                        $brands[] = $producto -> brand;
                    };
                }
            }
            return $brands;
        }
    }
?>
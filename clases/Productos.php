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

        public function getID(){
            return $this->id;
        }
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
            foreach ($JSONData as $pro) {
                $producto = new self();
                $producto -> discountPercentage = $pro -> discountPercentage; 
                $producto -> description = $pro -> description; 
                $producto -> thumbnail = $pro -> thumbnail; 
                $producto -> category = $pro -> category; 
                $producto -> reviews = $pro -> reviews; 
                $producto -> rating = $pro -> rating; 
                $producto -> images = $pro -> images; 
                $producto -> title = $pro -> title; 
                $producto -> price = $pro -> price; 
                $producto -> stock = $pro -> stock;
                if(isset($pro -> brand)){
                    $producto -> brand = $pro -> brand; 
                }
                $producto -> tags = $pro -> tags; 
                $producto -> id = $pro -> id; 
                $gondola[] = $producto;
            }
            return $gondola;
        }
        public static function traerProductoID($id): ?object {
            $productoElegido = null;
            $JOSN = file_get_contents("./json/productos.json");
            $JSONData = json_decode($JOSN);
            foreach ($JSONData as $producto) {
                if($producto -> id == $id){
                    $productoElegido = new self();
                    $productoElegido -> discountPercentage = $producto -> discountPercentage; 
                    $productoElegido -> description = $producto -> description; 
                    $productoElegido -> thumbnail = $producto -> thumbnail; 
                    $productoElegido -> category = $producto -> category; 
                    if(isset($producto -> brand)){
                        $productoElegido -> brand = $producto -> brand; 
                    }
                    $productoElegido -> reviews = $producto -> reviews; 
                    $productoElegido -> rating = $producto -> rating; 
                    $productoElegido -> images = $producto -> images; 
                    $productoElegido -> title = $producto -> title; 
                    $productoElegido -> price = $producto -> price; 
                    $productoElegido -> stock = $producto -> stock;
                    $productoElegido -> tags = $producto -> tags; 
                    $productoElegido -> id = $producto -> id;
                }
            }
            if( $productoElegido == null){
                return null;
            }
            return $productoElegido;
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
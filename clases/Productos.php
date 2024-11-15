<?php
    require_once './clases/Funciones.php';
    require_once './Clases/Categoria.php';
    require_once './Clases/Marca.php';

    class Productos {
        private $id;
        private $title;
        private $description;
        private $thumbnail;
        private $price;
        private $stock;
        private $category_id;
        private $brand_id;
        private $user_id;
        private $time;

        public function getID(){
            return $this->id;
        }
        public function getTitle() {
            return $this->title;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getThumbnail() {
            return $this->thumbnail;
        }
        public function getPrice() {
            return $this->price;
        }
        public function getStock() {
            return $this->stock;
        }
        public function getCategory_id(){
            $categoria = Categoria::get_x_id($this -> category_id);
            $nombre = $categoria->getCategoria();
            return $nombre;
        }
        public function getMarca_id(){
            $marca = Marca::get_x_id($this -> brand_id);
            $nombre = $categoria->getMarca();
            return $nombre;
        }
        public static function traerProductos(): array {
            $conexion = (new Conexion())->getConexion();
            $query = "SELECT 
                    p.name, 
                    p.description, 
                    p.imagen, 
                    p.price, 
                    p.stock, 
                    b.brand_name, 
                    c.category_name, 
                    u.username 
                FROM 
                    product AS p
                JOIN 
                    brand AS b ON p.brand_id = b.brand_id
                JOIN 
                    category AS c ON p.category_id = c.category_id
                JOIN 
                    usuario AS u ON p.user_id = u.user_id";

            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
            $PDOStatement->execute();

            $lista = $PDOStatement->fetchAll();

            return $lista;
        }
        public static function get_x_id(int $id): ?Productos{
            $conexion = (new Conexion())->getConexion();
            $query = "SELECT 
                    p.name, 
                    p.description, 
                    p.imagen, 
                    p.price, 
                    p.stock, 
                    b.brand_name, 
                    c.category_name, 
                    u.username 
                FROM 
                    product AS p
                JOIN 
                    brand AS b ON p.brand_id = b.brand_id
                JOIN 
                    category AS c ON p.category_id = c.category_id
                JOIN 
                    usuario AS u ON p.user_id = u.user_id
                WHERE 
                    p.product_id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(["id" => $id]);

        $lista = $PDOStatement->fetch();

        return !empty($lista) ? $lista : null;
}
    }
?>
<?php
class Categoria
{
    private $id_categoria;	
    private $categoria;	

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }
    
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function todasCategorias():array
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM category";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $lista = $PDOStatement->fetchAll();

        return $lista;
    }
    /**
     * Inserta una nueva marca en la base de datos
    */
    public static function insert(string $categoria)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "INSERT INTO category (`category_name`) VALUES (:categoria)";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'categoria' => $categoria
        ]);
    }



    /**
     * Obtiene una marca por id
     * 
    */
    public static function get_x_id(int $id): ?Categoria
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM category WHERE category_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(["id" => $id]);

        $lista = $PDOStatement->fetch();

        return !empty($lista) ? $lista : null;
    }
    /**
     * Edita una instancia de marca
     */
    public function edit($categoria)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "UPDATE category SET category_name = :nombreCategoria
          WHERE category_id = :id";
        // print_r($this->id_marca);
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
                        "nombreCategoria"   => $categoria, 
                        "id"            => $this-> category_id
                        // "id"            => $id
                    ]);
    }

    /**
     * Borra una instancia de marca
     */
    public function delete()
    {
        $conexion = (new Conexion())->getConexion();
        $query = "DELETE FROM category WHERE category_id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
                        "id" => $this-> id_categoria
                    ]);
    }
}

?>
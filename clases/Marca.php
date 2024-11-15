<?php
class Marca
{
    private $id_marca;	
    private $marca;	

    public function getIdMarca()
    {
        return $this->id_marca;
    }
    
    public function getMarca()
    {
        return $this->marca;
    }
    public function todasMarcas():array
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM brand";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $lista = $PDOStatement->fetchAll();

        return $lista;
    }
    /**
     * Inserta una nueva marca en la base de datos
    */
    public static function insert(string $marca)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "INSERT INTO brand (`brand_name`) VALUES (:marca)";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'marca' => $marca
        ]);
    }



    /**
     * Obtiene una marca por id
     * 
    */
    public static function get_x_id(int $id): ?Marca
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM brand WHERE brand_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(["id" => $id]);

        $lista = $PDOStatement->fetch();

        return !empty($lista) ? $lista : null;
    }
    /**
     * Edita una instancia de marca
     */
    public function edit($marca)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "UPDATE brand SET brand_name = :nombreMarca
          WHERE brand_id = :id";
        // print_r($this->id_marca);
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
                        "nombreMarca"   => $marca, 
                        "id"            => $this->id_marca
                        // "id"            => $id
                    ]);
    }

    /**
     * Borra una instancia de marca
     */
    public function delete()
    {
        $conexion = (new Conexion())->getConexion();
        $query = "DELETE FROM brand WHERE brand_id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
                        "id" => $this->id_marca
                    ]);
    }
}

?>
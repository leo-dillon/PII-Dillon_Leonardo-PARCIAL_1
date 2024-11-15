<?php
class Rol
{
    private $rol_id;	
    private $rol_name;
    private $can_view_products;
    private $can_buy_products;
    private $can_edit_products;
    private $can_delete_products;
    private $can_create_products;
    private $can_manege_users;

    public function getRolId() {
        return $this->rol_id;
    }

    public function getRolName() {
        return $this->rol_name;
    }

    public function canViewProducts() {
        return $this->can_view_products;
    }

    public function canBuyProducts() {
        return $this->can_buy_products;
    }

    public function canEditProducts() {
        return $this->can_edit_products;
    }

    public function canDeleteProducts() {
        return $this->can_delete_products;
    }

    public function canCreateProducts() {
        return $this->can_create_products;
    }

    public function canManegeUsers() {
        return $this->can_manege_users;
    }
    
    public static function get_x_id(int $id): ?Rol
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM rol WHERE rol_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(["id" => $id]);

        $lista = $PDOStatement->fetch();

        return !empty($lista) ? $lista : null;
    }
   
}

?>
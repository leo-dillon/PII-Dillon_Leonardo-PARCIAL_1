<?php
class Usuario
{
    private $user_id;
    private $username;
    private $password;
    private $email;
    private $rol_id;
    private $time;

    public function getId(){
        return $this->user_id;
    }
    public function getUserName(){
        return $this-> username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPais(){
        return $this->_pais;
    }
    public function getEdad(){
        return $this->_edad;
    }

    public static function insert(String $username, String $password, String $email)
    {
        $conexion = (new Conexion())->getConexion();
        $query = "INSERT INTO `usuario` (`username`, `password`, `email`)
        VALUES (':username', ':password', ':email');";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'username' => $username,
            'password' => $password,
            'email' => $email
        ]);
    }

    public static function get_x_id(int $id): ?Usuario
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM usuario WHERE user_id = :id";

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute(["id" => $id]);

        $lista = $PDOStatement->fetch();

        return !empty($lista) ? $lista : null;
    }

}
?>
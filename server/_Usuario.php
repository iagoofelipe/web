<?php
include("_Database.php");

class Usuario {
    
    private $db = null;
    
    function __construct($db){
        $this->$db = $db;
    }

    public function verificarUsuario($user, $password)
    {
        global $mysql;
        $email = $mysql->real_escape_string($user);
        $senha = $mysql->real_escape_string($password);

        $sql_code = "SELECT * FROM usuarios WHERE user = '$email' AND password = '$senha'";
        $sql_query = $mysql->query($sql_code);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            return true;

        } else {
            return false;
        }
    }
}

?>
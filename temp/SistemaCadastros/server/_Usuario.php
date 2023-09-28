<?php
class Usuario {
    
    private $db;
    public $username = "";
    
    function __construct($db){
        $this->db = $db;
    }

    public function verificarUsuario($user, $password) {
        $email = $this->db->real_escape_string($user);
        $senha = $this->db->real_escape_string($password);

        $sql_code = "SELECT * FROM usuarios WHERE user = '$email' AND password = '$senha'";
        $sql_query = $this->db->query($sql_code);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            return true;

        } else {
            return false;
        }
    }
}
?>
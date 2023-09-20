<?php

Class Database
{
    private $msql;
    public $msgErro = "";
    public $isConnected = false;
 
    function __construct($host, $usuario, $senha, $database){
        $this->isConnected = $this->conectar($host, $usuario, $senha, $database);
    }
    
    private function conectar($host, $usuario, $senha, $database)
    {
        global $mysql, $msgErro;
        try {
            $mysql = new mysqli($host, $usuario, $senha, $database);
            return true;
        } catch (ErrorException $e) {
            $msgErro = $e->getMessage();
            return false;
        }
    }

    // public function verificarUsuario($user, $password)
    // {
    //     global $mysql;
    //     $email = $mysql->real_escape_string($user);
    //     $senha = $mysql->real_escape_string($password);

    //     $sql_code = "SELECT * FROM usuarios WHERE user = '$email' AND password = '$senha'";
    //     $sql_query = $mysql->query($sql_code);

    //     $quantidade = $sql_query->num_rows;

    //     if($quantidade == 1){
    //         return true;

    //     } else {
    //         return false;
    //     }
    // }
}

?>
<?php

Class Database extends mysqli
{
    public $msgErro = "";
    public $isConnected = false;
 
    function __construct($host, $usuario, $senha, $database){
        try {
            parent::__construct($host, $usuario, $senha, $database);
            $this->isConnected = true;
        
        } catch (ErrorException $e) {
            $this->msgErro = $e->getMessage();
            $this->isConnected =  false;
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
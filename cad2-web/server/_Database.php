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
}

$db = new Database("requests.mysql.uhserver.com", "unit_user", "unit@12", "requests");

?>
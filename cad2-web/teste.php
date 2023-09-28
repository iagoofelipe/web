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

$db = new Database("srv1076.hstgr.io", "u480274783_iagofun", "I@go.387954", "u480274783_iagofun");
$sql_code = "SELECT * FROM users";
$sql_query = $db->query($sql_code);

echo $sql_query->fetch_all();
?>
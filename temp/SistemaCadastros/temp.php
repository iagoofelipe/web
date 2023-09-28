<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Temp {
    
    private $user = "Iago0";
    public $isConnected = true;

    public function __construct(){

    }

    public function showUser(){
        echo $this->user;
    }

    public function changeConnection(){
        $this->isConnected = !$this->isConnected;
        return $this->isConnected;
    }
}

$obj = new Temp();
// echo "Iago";
$obj->showUser();
if($obj->isConnected){
    echo "sim";
} else {
    echo "nao";
}
?>
</body>
</html>